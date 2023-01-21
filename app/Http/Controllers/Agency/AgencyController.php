<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Profile;
use App\Models\StudentRegister;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
//use Barryvdh\DomPDF\Facade as PDF;

use DB;
Use Auth;
use App\Models\Agreement;



class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reference_id = Auth::user()->generated_id;
        if($reference_id){

              $data['applications'] =StudentRegister::where('reference_id',$reference_id)->paginate(10);
              return view('agency.application.index',$data);
        }else{

            return redirect()->back()->withErrors('You have not any data');
        }

       
         //dd($data['applications']);
        
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
        $students = StudentRegister::with('user')->where('id', $id)->first();
        //dd($students);

        return view('agency.application.show', compact('students'));
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

    public function viewAgency($id){



        $data['agency_data']=User::where('id',$id)->first();
        return view('agency.profile',$data);
    }


    public function EditAgency($id){

       $data['edit_data']=User::with('profile')->where('id',$id)->first();
        //dd($data['edit_data']);
        return view('agency.profile_edit',$data);

    }


    public function updateAgency(Request $request,$id){

         //dd(ok);

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
            'agency_name' => 'nullable|string',
            'email' => 'required|string',
            'mobile_number' => 'required|string',
            'pro_image' => 'nullable',
            
        ]);

        return $user_data;
    }



    public function agncyAgreement(Request $request,$user){

         $data['all_data']=User::findOrFail($user);  
        return view('agency.agreement',$data);
    }

    public function agreementSave(Request $request,$user){
            $agreement_data=Agreement::where('user_id',$user)->first();
            if($agreement_data){

                $notification=[
            'message'=>'Sorry already added',
            'alert-type'=>'danger'

        ];

        return redirect()->back()->with($notification); 
            }
       // dd($request->all());
         
         $agreement = new Agreement();
         $agreement->user_id =$request->user_id;
         $agreement->generated_id =$request->generated_id;

         if (!empty($request->file('signature_image'))) {
            $signature_image = uniqid() . '.' . $request->signature_image->getClientOriginalExtension();
            $request->signature_image->move(public_path('uploads/signature'), $signature_image);
            $agreement['signature_image'] = $signature_image;
            //dd($agreement['signature_image']);
        }
        //dd($agreement['signature_image']);

        $agreement->save();

        $notification=[
            'message'=>'Successfully added',
            'alert-type'=>'success'

        ];

        return redirect()->back()->with($notification); 




    }
}
