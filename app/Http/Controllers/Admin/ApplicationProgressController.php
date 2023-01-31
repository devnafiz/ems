<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentStatus;
use App\Models\StudentRegister;
use App\Models\ApplicationStatus;

use App\Mail\StatusMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;



class ApplicationProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['edit_data']=StudentStatus::findOrFail($id);
        $data['status'] =ApplicationStatus::where('status',1)->get();
        //dd($data['edit_data']);

        return view('admin.status.progress_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data=[
            
            'status'=>$request->status,
            'feedback'=>$request->feedback,

           ];
          // dd($request->hasfile('status_file'));

           if (!empty($request->hasfile('status_file'))) {
            $documents = uniqid() . '.' . $request->status_file->getClientOriginalExtension();
            $request->status_file->move(public_path('uploads/status/'), $documents);
            $data['status_file'] = $documents;
        }
        
          //dd($data);
        // $application_status = new StudentStatus;
         $data = StudentStatus::where('id',$id)->update($data);

           $notification = array(
            'message' => 'Status updated',
            'alert-type' => 'success'
        );
          return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = StudentStatus::findOrFail($id);
       // unlink(public_path('uploads/profile/'.$user->pro_image));
        //User::findOrFail($id)->delete();

       
        if($user){
            $user->delete();
        }
        $notification = array(
            'message' => 'Status Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



    public function UpdateStatus(Request $request,$id){
       //dd($request->all());



          $data=[
            'application_id'=>$request->id,
            'status'=>$request->status,
            'feedback'=>$request->feedback,

           ];
          // dd($request->hasfile('status_file'));

           if (!empty($request->hasfile('status_file'))) {
            $documents = uniqid() . '.' . $request->status_file->getClientOriginalExtension();
            $request->status_file->move(public_path('uploads/status/'), $documents);
            $data['status_file'] = $documents;
        }
        
          //dd($data);
         $application_status = new StudentStatus;
         $data = $application_status->insertGetId($data);
        
          StudentRegister::findOrFail($id)->update(['app_status'=>$request->status]);
          $student_id=StudentRegister::findOrFail($id)->student_id;
          $all_data= User::where('id',$student_id)->first();
          //dd($all_data);

          
           
           $status_data = [
            
            'name' => $all_data->student_name,
            'email' => $all_data->email,
            
           ];

        Mail::to($all_data->email)->send(new StatusMail($status_data));


         //$data=StudentRegister::findOrFail($id)->update(['app_status'=>$request->name]);
           $notification = array(
            'message' => 'Status updated',
            'alert-type' => 'success'
        );
          return redirect()->back()->with($notification);

       //return response()->json(['success'=>'Successfully updated status']);
    }


}
