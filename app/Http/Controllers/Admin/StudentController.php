<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;
use App\Models\Profile;
use App\Models\Country;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['all_data']=User::where('name','student')->orderByDesc('id')->paginate(10);

         return view('admin.student.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data['all_data']=User::where('id',$id)->first();
        return view('admin.student.details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $data['edit_data']=User::with('profile')->where('id',$id)->first();
         $data['countries'] =Country::all();

        //dd($data['edit_data']);
         return view('admin.student.edit',$data);
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
         $user_data = $this->UserDataValidation();
         $profile_data = $this->profileEditValidation();
         //dd($profile_data);

          if (!empty($request->file('pro_image'))) {
            $documents = uniqid() . '.' . $request->pro_image->getClientOriginalExtension();
            $request->pro_image->move(public_path('uploads/profile/'), $documents);
            $user_data['pro_image'] = $documents;
        }

        //dd($user_data);

          $User_deatils= User::where('id', $id)->first();
          $User_deatils->update($user_data);

          
         //dd($profile_data['user_id']);
          if (!empty($profile_data['user_id'])) {
                     $profile =Profile::where('user_id', $profile_data['user_id'])->first();
                     if(empty($profile)){
                        // unset($profile_data['user_id']);
                     $newOwner = Profile::create($profile_data);


                     }else{
                        Profile::where('user_id', $profile_data['user_id'])->update($profile_data);
                     }

                   
                } else {
                    unset($profile_data['user_id']);
                    $newOwner = Profile::create($profile_data);
                    // Creating owners and also inserting the owners id to join table with license
                   
                }

              return redirect()
            ->back()
            ->withFlashSuccess('Successfully updated');   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::findOrFail($id);
        unlink(public_path('uploads/profile/'.$user->pro_image));
        User::findOrFail($id)->delete();

        $profile = Profile::where('user_id',$id)->first();
        if($profile){
            $profile->delete();
        }
        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function StudentInactive(Request $request,$id){
         User::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Student Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }

    public function StudentActive(Request $request,$id){

       User::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Student Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function profileEditValidation()
    {
        $profile_data = request()->validate([
            'user_id' => 'nullable|numeric',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            
        ]);

        return $profile_data;
    }


     public function UserDataValidation()
    {
        $user_data = request()->validate([
            'student_name' => 'nullable|string',
            'email' => 'required|string',
            'mobile_number' => 'required|string',
            'pro_image' => 'nullable',
            
        ]);

        return $user_data;
    }
}
