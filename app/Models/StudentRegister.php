<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    protected $table = "student_registers";
    
    protected $fillable = [
        'nationality',
        'passport_number',
        'date_of_birth',
        'passport_issue_date',
        'obtain_single_entry_visa',
        'applicant_email_id',
        'sex',
        'applicant_permanent_add',
        'applicant_postal_code',
        'country',
        'resident_number',
        'programme',
        'subject',
        'applicant_name',
        'passport_issued_place',
        'passport_expiry_date',
        'applicant_mobile_number',
        'agent_email_id',
        'marital',
        'applicant_city',
        'applicant_state',
        'mobile_number',
        'as_above',
        'correspondence_address',
        'postal_code',
        'country_2',
        'resident_number_2',
        'father_tel_no',
        'mother_name',
        'mother_occupation',
        'guardian_tel_no',
        'highest_qualification',
        'year_of_passing',
        'city',
        'state',
        'mobile_number_2',
        'father_name',
        'father_occupation',
        'mother_tel_no',
        'gurdian_name',
        'gurdian_occupation',
        'grade',
        'applicant_name_2',
        'study',
        'passport_number_2',
        'visa_pass',
        'health_declaration',
        'health_declaration_file',
        'passport_scanned',
        'passport_scanned_file',
        'photo',
        'photo_file',
        'academic_certificate_1',
        'academic_certificate_file_1',
        'academic_certificate_2',
        'academic_certificate_file_2',
    ];

    use HasFactory;

     public function user(){
        return $this->belongsTo(User::class,'student_id','id');
    }
}
