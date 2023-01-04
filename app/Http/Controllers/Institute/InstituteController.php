<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use DB;
use Auth;

class InstituteController extends Controller
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function  viewProfile($id){

        $data['all_data'] =User::with('profile')->where('id',$id)->first();

        //dd($data['all_data']);
       return view('institute.profile',$data);



    }
    public function editProfile(Request $request,$id){

        $data['edit_data'] =User::with('profile')->where('id',$id)->first();
        return view('institute.edit_profile',$data);

    }

    public function UpdateProfile(Request $request,$id){

       
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
                     $profile = Profile::where('user_id', $profile_data['user_id'])->first();
                     if($profile){
                         Profile::where('user_id', $profile_data['user_id'])->update($profile_data);
                     }else{

                          $newOwner = Profile::create($profile_data);
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
            'institute_name' => 'nullable|string',
            'email' => 'required|string',
            'mobile_number' => 'required|string',
            'pro_image' => 'nullable',
            
        ]);

        return $user_data;
    }
}
