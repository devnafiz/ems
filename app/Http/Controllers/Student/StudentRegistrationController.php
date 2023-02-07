<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\StudentRegister;
use App\Models\StudentCertificate;
use Auth;
use Storage;
use App\Models\Profile;
use App\Models\Country;
use App\Models\Program;
use App\Models\Subject;
use App\Models\StudentStatus;




class StudentRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_data = Auth::user()->id;
        $data['user'] = User::find($user_data);
        //$programmes = DB::table('programme')->get();
        $data['countries'] =Country::all();
        $data['subject'] = DB::table('subject')->where('status','1')->get();
        $data['programmes'] = DB::table('programme')->where('status','1')->get();
        
        return view('student.studentRegister', $data);
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
        //dd($request);

        $student = new StudentRegister;
        $student->student_id = Auth::user()->id;

        $studentRegistration= $this->studentRegistrationValidation();
        //dd($studentRegistration);
        
        $student->nationality = $studentRegistration['nationality'];
        $student->reference_id = $studentRegistration['reference_id'];

        $student->passport_number = $studentRegistration['passport_number'];
        $student->date_of_birth = $studentRegistration['date_of_birth'];
        $student->passport_issue_date = $studentRegistration['passport_issue_date'];
        $student->obtain_single_entry_visa = $studentRegistration['obtain_single_entry_visa'];
        $student->applicant_email_id = $studentRegistration['applicant_email_id'];
        $student->sex = $studentRegistration['sex'];
        $student->applicant_permanent_add = $studentRegistration['applicant_permanent_add'];
        $student->applicant_postal_code = $studentRegistration['applicant_postal_code'];
        $student->country = $studentRegistration['country'];
        $student->resident_number = $studentRegistration['resident_number'];
        $student->programme = $studentRegistration['programme'];
        $student->subject = $studentRegistration['subject'];
        $student->applicant_name = $studentRegistration['applicant_name'];
        $student->passport_issued_place = $studentRegistration['passport_issued_place'];
        $student->passport_expiry_date = $studentRegistration['passport_expiry_date'];
        $student->applicant_mobile_number = $studentRegistration['applicant_mobile_number'];
        $student->agent_email_id = $studentRegistration['agent_email_id'];
        $student->marital = $studentRegistration['marital'];
        $student->applicant_city = $studentRegistration['applicant_city'];
        $student->applicant_state = $studentRegistration['applicant_state'];
        $student->mobile_number = $studentRegistration['mobile_number'];

        //$student->as_above = $studentRegistration['as_above'];
        $student->correspondence_address = $studentRegistration['correspondence_address'];
        $student->postal_code = $studentRegistration['postal_code'];
        $student->country_2 = $studentRegistration['country_2'];
        $student->resident_number_2 = $studentRegistration['resident_number_2'];
        $student->father_tel_no = $studentRegistration['father_tel_no'];
        $student->mother_name = $studentRegistration['mother_name'];
        $student->mother_occupation = $studentRegistration['mother_occupation'];
        $student->guardian_tel_no = $studentRegistration['guardian_tel_no'];
        $student->highest_qualification = $studentRegistration['highest_qualification'];
        $student->year_of_passing = $studentRegistration['year_of_passing'];
        $student->city = $studentRegistration['city'];
        $student->state = $studentRegistration['state'];
        $student->mobile_number_2 = $studentRegistration['mobile_number_2'];
        $student->father_name = $studentRegistration['father_name'];
        $student->father_occupation = $studentRegistration['father_occupation'];
        $student->mother_tel_no = $studentRegistration['mother_tel_no'];
        $student->gurdian_name = $studentRegistration['gurdian_name'];
        $student->gurdian_occupation = $studentRegistration['gurdian_occupation'];
        $student->grade = $studentRegistration['grade'];

        $student->applicant_name_2 = $studentRegistration['applicant_name_2'];
        $student->study = $studentRegistration['study'];
        $student->passport_number_2 = $studentRegistration['passport_number_2'];
        $student->visa_pass = $studentRegistration['visa_pass'];
        $student->health_declaration = $studentRegistration['health_declaration'];
        $student->passport_scanned = $studentRegistration['passport_scanned'];
        $student->photo = $studentRegistration['photo'];
        $student->academic_certificate_1 = $studentRegistration['academic_certificate_1'];
        $student->academic_certificate_2 = $studentRegistration['academic_certificate_2'];
        
        if (!empty($request->file('health_declaration_file'))) {
            $health_declaration_file = uniqid() . '.' . $request->health_declaration_file->getClientOriginalExtension();
            $request->health_declaration_file->move(public_path('uploads/health'), $health_declaration_file);
            $student->health_declaration_file = $health_declaration_file;
        }

        if (!empty($request->file('passport_scanned_file'))) {
            $passport_scanned_file = uniqid() . '.' . $request->passport_scanned_file->getClientOriginalExtension();
            $request->passport_scanned_file->move(public_path('uploads/passport'), $passport_scanned_file);
            $student['passport_scanned_file'] = $passport_scanned_file;
        }

        if (!empty($request->file('photo_file'))) {
            $photo_file = uniqid() . '.' . $request->photo_file->getClientOriginalExtension();
            $request->photo_file->move(public_path('uploads/photo'), $photo_file);
            $student->photo_file = $photo_file;
        }

        if (!empty($request->file('academic_certificate_file_1'))) {
            $academic_certificate_file_1 = uniqid() . '.' . $request->academic_certificate_file_1->getClientOriginalExtension();
            $request->academic_certificate_file_1->move(public_path('uploads/certificates'), $academic_certificate_file_1);
            $student->academic_certificate_file_1 = $academic_certificate_file_1;
            
        }

        if (!empty($request->file('academic_certificate_file_2'))) {
            $academic_certificate_file_2 = uniqid() . '.' . $request->academic_certificate_file_2->getClientOriginalExtension();
            $request->academic_certificate_file_2->move(public_path('uploads/certificates'), $academic_certificate_file_2);
            $student->academic_certificate_file_2 = $academic_certificate_file_2;
            
        }
        //dd($student);
       
        $student->save();

        
        return view('student.successfullCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student_id = $id;
        $user = User::find($student_id);
        //dd($user);
        $students = DB::table('student_registers')->where('student_id', $student_id)->get();
        $students_id = DB::table('student_registers')->where('student_id', $student_id)->first();
        if($students_id){
        //dd($students_id);
        $all_status=StudentStatus::where('application_id',$students_id->id)->get();
        }else{
            return redirect()->back();
        }

        //dd($all_status);

        return view('student.show', compact('students', 'user','all_status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $data['edit_data'] =StudentRegister::where('student_id',$id)->first();
       //dd($data['edit_data']);
       $data['countries'] =Country::all();
       $data['programmes'] = Program::where('status','1')->get();
       $data['subject'] = Subject::where('status','1')->get();


       return view('student.edit_application',$data);
        
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
        $application_data =$this->studentApplicationValidation();

           if (!empty($request->file('health_declaration_file'))) {
            $health_declaration_file = uniqid() . '.' . $request->health_declaration_file->getClientOriginalExtension();
            $request->health_declaration_file->move(public_path('uploads/health'), $health_declaration_file);
            $application_data['health_declaration_file'] = $health_declaration_file;
        }

        if (!empty($request->file('passport_scanned_file'))) {
            $passport_scanned_file = uniqid() . '.' . $request->passport_scanned_file->getClientOriginalExtension();
            $request->passport_scanned_file->move(public_path('uploads/passport'), $passport_scanned_file);
            $application_data['passport_scanned_file'] = $passport_scanned_file;
        }

        if (!empty($request->file('photo_file'))) {
            $photo_file = uniqid() . '.' . $request->photo_file->getClientOriginalExtension();
            $request->photo_file->move(public_path('uploads/photo'), $photo_file);
            $application_data['photo_file'] = $photo_file;
        }

        if (!empty($request->file('academic_certificate_file_1'))) {
            $academic_certificate_file_1 = uniqid() . '.' . $request->academic_certificate_file_1->getClientOriginalExtension();
            $request->academic_certificate_file_1->move(public_path('uploads/certificates'), $academic_certificate_file_1);
            $application_data['academic_certificate_file_1'] = $academic_certificate_file_1;
            
        }

        if (!empty($request->file('academic_certificate_file_2'))) {
            $academic_certificate_file_2 = uniqid() . '.' . $request->academic_certificate_file_2->getClientOriginalExtension();
            $request->academic_certificate_file_2->move(public_path('uploads/certificates'), $academic_certificate_file_2);
            $application_data['academic_certificate_file_2'] = $academic_certificate_file_2;
            
        }


         $student_registration = StudentRegister::where('id', $id)->first();
         $student_registration->update($application_data);

           $notification = array(
            'message' => 'Student Registration Info updated',
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
        //
    }


    public function getSubject($id)
    {
        //dd($id);
        $subjects = DB::table("subject")
                    ->where("programme_id",$id)
                    ->pluck("subject_name","subject_id");
        //dd($subjects);
        return response()->json($subjects);    
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

    public function getProfile($id){

       $data['student_data']=User::with('profile')->findOrfail($id);
       //dd($data['student_data']);
       return view('student.profile',$data);
     }


     public function editProfile(Request $request,$id){
         $data['edit_data']=User::with('profile')->findOrfail($id);
            $data['countries'] =Country::all();
        //dd($data['student_data']);
        return view('student.edit_profile',$data);
       }


       public function  UpdateProfile(Request $request,$id){

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


        // dd($profile_data['user_id']);
          if (!empty($profile_data['user_id'])) {
                    $profile=Profile::where('user_id', $profile_data['user_id'])->first();
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


     public function studentApplicationValidation()
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
