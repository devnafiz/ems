<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Auth;
use DB;
use App\Models\StudentRegister;

class IndexController extends Controller
{
    public function index(){
        $data['user_data']=User::with('profile','studentregister')->where('id',Auth::user()->id)->first();

        //dd($data['user_data']);


        $data['students']=User::where('name','student')->count();

        $data['agencys']=User::where('name','agency')->count();
        //dd($data['students']);
        return view('admin.index',$data);
    }

    public function allAgency(){

         $data['all_data']=User::where('name','agency')->orderByDesc('id')->paginate(10);

         return view('admin.agency.index',$data);
    }

    public function AgencyView($id){

        $data['agency_data']=User::where('id',$id)->first();
        return view('admin.agency.show',$data);
    }

    public function EditAgency($id){

        $data['edit_data']=User::with('profile')->where('id',$id)->first();
        //dd($data['edit_data']);
        return view('admin.agency.edit',$data);
    }

    public function updateAgency(Request $request,$id){
         $user_data = $this->UserDataValidation();
         $profile_data = $this->profileEditValidation();

          if (!empty($request->file('pro_image'))) {
            $documents = uniqid() . '.' . $request->pro_image->getClientOriginalExtension();
            $request->pro_image->move(public_path('uploads/profile/'), $documents);
            $user_data['pro_image'] = $documents;
        }

        //dd($user_data);

          $User_deatils= User::where('id', $id)->first();
          $User_deatils->update($user_data);


        // dd($profile_data['user_id']);
          if (!empty($profile_data['user_id'])) {
                    Profile::where('user_id', $profile_data['user_id'])->update($profile_data);
                } else {
                    unset($profile_data['user_id']);
                    $newOwner = Profile::create($profile_data);
                    // Creating owners and also inserting the owners id to join table with license
                   
                }

              return redirect()
            ->back()
            ->withFlashSuccess('Successfully updated');   

    }


    public function AgencyActive(Request $request,$id){


        User::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Agency Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

     public function AgencyInactive(Request $request,$id){


      User::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Agency Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AgencyDelete($id){

        $user = User::findOrFail($id);
        unlink(public_path('uploads/profile/'.$user->pro_image));
        User::findOrFail($id)->delete();

        $profile = Profile::where('user_id',$id)->first();
        if($profile){
            $profile->delete();
        }
         

        

        $notification = array(
            'message' => 'Agency Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function getProfile(Request $request,$id){



    }



    //all student 

    public  function allStudents(Request $request){

        $data['all_data']=User::where('name','student')->orderByDesc('id')->paginate(10);

         return view('admin.student.index',$data);
    }




    public function profileEditValidation()
    {
        $profile_data = request()->validate([
            'user_id' => 'nullable|numeric',
            'address' => 'nullable|string',
            'contact_person' => 'nullable|string',
            'country' => 'nullable|string',
            
        ]);

        return $profile_data;
    }


     public function UserDataValidation()
    {
        $user_data = request()->validate([
            'agency_name' => 'nullable|string',
            'student_name' => 'nullable|string',
            'email' => 'required|string',
            'mobile_number' => 'required|string',
            'pro_image' => 'nullable',
            
        ]);

        return $user_data;
    }
}
