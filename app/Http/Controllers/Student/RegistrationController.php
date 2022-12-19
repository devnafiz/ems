<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use App\Models\StudentCertificate;
use Auth;
use Storage;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_data = Auth::user()->id;
        $user = User::find($user_data);
        $programmes = DB::table('programme')->get();
        
        return view('student.studentRegister', compact('user', 'programmes'));
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

        $certificate_data= $this->studentCertificateValidation();
        //dd($student_data);
        //dd($request->file('photo'));
        //dd($request->all());
        $this->validate($request, [
            'passport_number' => 'string|max:255',
            'programme' => 'string|max:855',
            'subject_name' => 'string|max:855',
        ]);
        //dd($aa);
        $student = new Student;
        $student->student_id = Auth::user()->id;
        //dd($student);
        $student->passport_number = $request->passport_number;
        $student->programme = $request->programme;
        $student->subject_name = $request->subject_name;
        
        if ($request != null && !empty($request->file('photo'))) {
            $photo = uniqid() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('uploads/photo'), $photo);
            $student->photo = $photo;
        }

        if ($request != null && !empty($request->file('passport_copy1'))) {
            $passport_copy1 = uniqid() . '.' . $request->passport_copy1->getClientOriginalExtension();
            $request->passport_copy1->move(public_path('uploads/passport'), $passport_copy1);
            $student['passport_copy1'] = $passport_copy1;
        }

        if ($request != null && !empty($request->file('passport_copy2'))) {
            $passport_copy2 = uniqid() . '.' . $request->passport_copy2->getClientOriginalExtension();
            $request->passport_copy2->move(public_path('uploads/passport'), $passport_copy2);
            $student->passport_copy2 = $passport_copy2;
        }

        if ($request != null && !empty($request->file('passport_copy3'))) {
            $passport_copy3 = uniqid() . '.' . $request->passport_copy3->getClientOriginalExtension();
            $request->passport_copy3->move(public_path('uploads/passport'), $passport_copy3);
            $student->passport_copy3 = $passport_copy3;
            
        }
        //dd($student);
       
        $student->save();

        
        foreach ($certificate_data['academic-certificate'] as $data) {
            //dd($data['academic_programme']);
            //dd($data['certificate']);
            //dd(file($data['certificate']));

            $student_certificates = new StudentCertificate;
            $student_certificates->student_id = Auth::user()->id;
            $student_certificates->academic_programme = $data['academic_programme'];

            if (!empty($data['certificate'])) {
                $certificate = uniqid() . '.' . $data['certificate']->getClientOriginalExtension();
                $data['certificate']->move(public_path('uploads/certificates'), $certificate );
                $student_certificates->certificate = $certificate;
                
            }

            if (!empty($data['marksheet'])) {
                $marksheet = uniqid() . '.' . 
                $data['marksheet']->getClientOriginalExtension();
                $data['marksheet']->move(public_path('uploads/marksheet'), $marksheet);
                $student_certificates->marksheet = $marksheet;
                
            }

            //dd($student_certificates);

            $student_certificates->save();

            return view('student.successfullCreate');
            
        }
        
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
        $students = DB::table('students')->where('student_id', $student_id)->get();
        $certificates = DB::table('student_certificates')->where('student_id', $student_id)->get();
        //dd($students);

        return view('student.show', compact('students', 'user', 'certificates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student_id = $id;
        $user = User::find($student_id);
        //dd($user);
        $students = DB::table('students')->where('student_id', $student_id)->get();
        $certificates = DB::table('student_certificates')->where('student_id', $student_id)->get();
        //dd($students);

        return view('student.update', compact('students', 'user', 'certificates'));
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
        dd($request->all());
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


    public function studentCertificateValidation()
    {
        return request()->validate([
            'academic-certificate.*.academic_programme' => 'nullable',
            'academic-certificate.*.certificate' => 'nullable',
            'academic-certificate.*.marksheet' => 'nullable'
        ]);
    }
}
