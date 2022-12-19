<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    
    protected $fillable = [
        'student_id',
        'passport_number',
        'programme',
        'subject_name',
        'photo',
        'passport_copy1',
        'passport_copy2',
        'passport_copy3',
    ];

    public function studentCertificates(){
        return $this->hasMany('App\Models\StudentCertificate', 'student_id');
    }

    public function student(){
        return $this->belongsTo(User::class,'id','student_id');
    }

    use HasFactory;
}
