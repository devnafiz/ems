<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRegister;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
//use Barryvdh\DomPDF\Facade as PDF;

use DB;
use App\Models\ApplicationStatus;
use App\Models\Country;
use App\Models\StudentStatus;
use App\Models\User;

use App\Models\Agreement;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['applications'] =StudentRegister::paginate(10);
         //dd($data['applications']);
        return view('admin.application.index',$data);
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
        $data['application_details'] =StudentRegister::findOrfail($id);
        $data['all_status']=StudentStatus::where('application_id',$id)->get();
        $data['programme']=DB::table('programme')->where('programme_id',$data['application_details']->programme)->first()->programme_name;
        //dd($data['programme']);
        $data['subject']=DB::table('subject')->where('subject_id',$data['application_details']->subject)->first()->subject_name;

        //dd($data['subject']);
         $data['status'] =ApplicationStatus::where('status',1)->get();
         //dd( $data['status']);
        return view('admin.application.details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['edit_data'] =StudentRegister::findOrfail($id);
       $data['countries'] =Country::all();
       $data['subject'] = DB::table('subject')->get();
       $data['programmes'] = DB::table('programme')->get();

       return view('admin.application.edit_application',$data);
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


    public function pdf(Request $request){
       $id = $request->id;
      $item =$data['application_details'] =StudentRegister::findOrfail($id);
      $programme=DB::table('programme')->where('programme_id', $item->programme)->first()->programme_name;
        //dd($data['programme']);
      $subject=DB::table('subject')->where('subject_id', $item->subject)->first()->subject_name;
      $user=DB::table('users')->where('id', $id)->first();
      //dd($user);


        $now = new \DateTime();
       
        $date = $now->format('d-m-Y' . ' h:i:s');
         //dd($date);
        $extra = array(
            'current_date_time' => $date,
            'module_name' => 'Apllication Details',
            'programme' =>$programme,
            'subject' =>$subject,
           
        );

        //dd($extra);
         $pdf = PDF::loadView('admin.pdf'.'.apllication_details', ['items' => $item, 'extra' => $extra,'users'=>$user])->setPaper('a4', 'landscape');

         //dd($pdf);
         return $pdf->download($extra['current_date_time'] . '_' . $extra['module_name'] . '.pdf');


    }

    public function UpdateStatus(Request $request,$id){
   //dd($request->name);
       $data=StudentRegister::findOrFail($id)->update(['app_status'=>$request->name]);

       return response()->json(['success'=>'Successfully update status']);
       
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


    public function getInfo(Request $request,$info){


          $student_data=StudentRegister::where('id',$info)->first()->reference_id;
          if($student_data){

            $data['agency_data']=User::where('generated_id',$student_data)->first();
            $data['count_application'] =StudentRegister::where('reference_id',$student_data)->count();             

            return view('admin.agency.user_info',$data);
            
          }else{
             $notification = array(
            'message' => 'Any Info here!',
            'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
           
          }
          
    }

    public function allAgencyAgreement(){

        $data['all_data']=Agreement::with('user')->orderByDesc('id')->paginate(10);

        //dd($data['all_data']);
         return view('admin.agency.all_agreement',$data);
    }

    public function AgreementView($id){


        $data['all_data']=Agreement::with('user')->findOrfail($id);
        //dd($data['all_data']);
        return view('admin.agency.agreement_details',$data);
    }

    public function AgreementApproved($id){

        $data['all_data']=Agreement::with('user')->findOrfail($id);
        return view('admin.agency.approve_agreement',$data);

    }

}
