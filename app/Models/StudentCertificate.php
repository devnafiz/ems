<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCertificate extends Model
{
    protected $table = "student_certificates";

    protected $fillable = [
        'student_id',
        'academic_programme',
        'certificate',
        'marksheet',
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student', 'student_id');
    }

    use HasFactory;
}
