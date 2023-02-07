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
use App\Models\ApplicationStatus;
use App\Models\Country;
use App\Models\StudentStatus;
use App\Notifications\NewRegisterNotification;



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
        $data['students'] = StudentRegister::with('user')->where('id', $id)->first();
        //dd($data['students']);

        $data['all_status']=StudentStatus::where('application_id',$id)->get();
        $data['programme']=DB::table('programme')->where('programme_id', $data['students']->programme)->first()->programme_name;
        //dd($data['programme']);
        $data['subject']=DB::table('subject')->where('subject_id', $data['students']->subject)->first()->subject_name;

        //dd($data['subject']);
         $data['status'] =ApplicationStatus::where('status',1)->get();
        //dd($students);
        
        return view('agency.application.show', $data);
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



        $data['agency_data']=User::with('profile')->where('id',$id)->first();
        $data['agreement']  =Agreement::where('user_id',$id)->first();
          //dd($data['agreement'] );
        return view('agency.profile',$data);
    }


    public function EditAgency($id){

       $data['edit_data']=User::with('profile')->where('id',$id)->first();
       $data['countries'] =Country::all();
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

          $data=[

               'user_id' =>$request->generated_id,
               'subject' =>'Agency apply for Agreement'
          ];
         // dd($data);

           $notification = User::first();
           //dd($notification);
           #store notification info into notifications table
           $notification->notify(new NewRegisterNotification($data));


        $notification=[
            'message'=>'Successfully added',
            'alert-type'=>'success'

        ];

        return redirect()->back()->with($notification); 




    }

    public function agreementCertificate($id){



      $item =Agreement::with('user')->where('user_id',$id)->first();
      //dd($item);
    

        $now = new \DateTime();
       
        $date = $now->format('d-m-Y' . ' h:i:s');
         //dd($date);
        $extra = array(
            'current_date_time' => $date,
            'module_name' => 'Certificate',
           
           
        );

        //dd($extra);
         $pdf = PDF::loadView('admin.pdf'.'.certificate', ['items' => $item, 'extra' => $extra])->setPaper('a4')->setOptions(['defaultFont' => 'sans-serif']);

         //dd($pdf);
         return $pdf->download($extra['current_date_time'] . '_' . $extra['module_name'] . '.pdf');


    }

   public function agreementConfirmation($id){

      $item =Agreement::with('user')->where('user_id',$id)->first();
      //dd($item);

      $now = new \DateTime();
       
        $date = $now->format('d-m-Y' . ' h:i:s');
         //dd($date);
        $extra = array(
            'current_date_time' => $date,
            'module_name' => 'agreement',
           
           
        );

          $pdf = PDF::loadView('admin.pdf'.'.agreement', ['items' => $item, 'extra' => $extra])->setPaper('a4', 'landscape');

         //dd($pdf);
         return $pdf->download($extra['current_date_time'] . '_' . $extra['module_name'] . '.pdf');
   }

   public function applicationEdit(Request $request,$id){

       $permissions=StudentRegister::with('user')->where('id', $id)->first();
       //dd(Auth::user()->generated_id);

       if($permissions->reference_id == Auth::user()->generated_id){

       $data['edit_data'] =StudentRegister::findOrfail($id);
       $data['countries'] =Country::all();
       $data['subject'] = DB::table('subject')->get();
       $data['programmes'] = DB::table('programme')->get();

        return view('agency.application.edit',$data);
       }else{

         return redirect()->back()->withErrors('You have not Access this application');
       }


   }


   public function applicationUpdate(Request $request,$id){

            $studentRegistration= $this->studentRegistrationValidation();
          //dd($studentRegistration);

           if (!empty($request->file('health_declaration_file'))) {
            $health_declaration_file = uniqid() . '.' . $request->health_declaration_file->getClientOriginalExtension();
            $request->health_declaration_file->move(public_path('uploads/health'), $health_declaration_file);
            $studentRegistration['health_declaration_file'] = $health_declaration_file;
        }

        if (!empty($request->file('passport_scanned_file'))) {
            $passport_scanned_file = uniqid() . '.' . $request->passport_scanned_file->getClientOriginalExtension();
            $request->passport_scanned_file->move(public_path('uploads/passport'), $passport_scanned_file);
            $studentRegistration['passport_scanned_file'] = $passport_scanned_file;
        }

        if (!empty($request->file('photo_file'))) {
            $photo_file = uniqid() . '.' . $request->photo_file->getClientOriginalExtension();
            $request->photo_file->move(public_path('uploads/photo'), $photo_file);
            $studentRegistration['photo_file'] = $photo_file;
        }

        if (!empty($request->file('academic_certificate_file_1'))) {
            $academic_certificate_file_1 = uniqid() . '.' . $request->academic_certificate_file_1->getClientOriginalExtension();
            $request->academic_certificate_file_1->move(public_path('uploads/certificates'), $academic_certificate_file_1);
            $studentRegistration['academic_certificate_file_1'] = $academic_certificate_file_1;
            
        }

        if (!empty($request->file('academic_certificate_file_2'))) {
            $academic_certificate_file_2 = uniqid() . '.' . $request->academic_certificate_file_2->getClientOriginalExtension();
            $request->academic_certificate_file_2->move(public_path('uploads/certificates'), $academic_certificate_file_2);
            $studentRegistration['academic_certificate_file_2'] = $academic_certificate_file_2;
            
        }


         $student_registration = StudentRegister::where('id', $id)->first();
         $student_registration->update($studentRegistration);

           $notification = array(
            'message' => 'Student Registration Info updated',
            'alert-type' => 'success'
        );
          return redirect()->back()->with($notification);

   }


     public function studentRegistrationValidation()
    {
        return request()->validate([
            'nationality' => 'nullable|string|max:255',
            'reference_id'=>'nullable|string|max:255',
            'passport_number' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|string|max:255',
            'passport_issue_date' => 'nullable|string|max:255',
            'obtain_single_entry_visa' => 'nullable|string|max:255',
            'applicant_email_id' => 'nullable|string|max:255',
            'sex' => 'nullable|string|max:255',
            'applicant_permanent_add' => 'nullable|string|max:255',
            'applicant_postal_code' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'resident_number' => 'nullable|string|max:255',
            'programme' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'applicant_name' => 'nullable|string|max:255',
            'passport_issued_place' => 'nullable|string|max:255',
            'passport_expiry_date' => 'nullable|string|max:255',
            'applicant_mobile_number' => 'nullable|string|max:255',
            'agent_email_id' => 'nullable|string|max:255',
            'marital' => 'nullable|string|max:255',
            'applicant_city' => 'nullable|string|max:255',
            'applicant_state' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:255',

            'as_above' => 'nullable|string|max:255',
            'correspondence_address' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'country_2' => 'nullable|string|max:255',
            'resident_number_2' => 'nullable|string|max:255',
            'father_tel_no' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'mother_occupation' => 'nullable|string|max:255',
            'guardian_tel_no' => 'nullable|string|max:255',
            'highest_qualification' => 'nullable|string|max:255',
            'year_of_passing' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'mobile_number_2' => 'nullable|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'father_occupation' => 'nullable|string|max:255',
            'mother_tel_no' => 'nullable|string|max:255',
            'gurdian_name' => 'nullable|string|max:255',
            'gurdian_occupation' => 'nullable|string|max:255',
            'grade' => 'nullable|string|max:255',

            'applicant_name_2' => 'nullable|string|max:255',
            'study' => 'nullable|string|max:255',
            'passport_number_2' => 'nullable|string|max:255',
            'visa_pass' => 'nullable|string|max:255',
            'health_declaration' => 'nullable|string|max:255',
            'passport_scanned' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:255',
            'academic_certificate_1' => 'nullable|string|max:255',
            'academic_certificate_2' => 'nullable|string|max:255',
        ]);
    }
}
