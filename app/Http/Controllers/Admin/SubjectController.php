<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Program;
use Auth;
use DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_data']=Subject::orderByDesc('subject_id')->paginate(10);
        return view('admin.subject.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['programmes']=Program::all();
         return view('admin.subject.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $user_data = $this->subjectInformationValidation();

        Subject::create($user_data);
         $notification = array(
            'message' => ' Subject Insert successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.subjects.index')->with($notification);
        //dd($user_data);
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
        $data['edit_data']= Subject::where('subject_id',$id)->first();
        $data['programmes']=Program::all();

        return view('admin.subject.edit',$data);
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
        //dd($request->all());
        $user_data = $this->subjectInformationValidation();

        Subject::where('subject_id',$id)->update($user_data);
         $notification = array(
            'message' => ' Subject updated  ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.subjects.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject=Subject::where('subject_id',$id)->first();
        if($subject){

            Subject::where('subject_id',$id)->delete();
            $notification = array(
            'message' => ' Subject deleted  ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.subjects.index')->with($notification);
        }else{
              $notification = array(
            'message' => 'Sorry Something is worng',
            'alert-type' => 'danger'
        );

        return redirect()->route('admin.subjects.index')->with($notification);

        }
        
    }


    public function StatusInactive($id){
        Subject::where('subject_id',$id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Status Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);   

    }

    public function StatusActive($id){

     Subject::where('subject_id',$id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Status Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);   
    }


    public function subjectInformationValidation(){

       $user_data = request()->validate([

                'subject_name' => 'required|string',

                'programme_id' => 'required|numeric',

                'status' => 'nullable|string',
        ]);
        return $user_data;
    }

}
