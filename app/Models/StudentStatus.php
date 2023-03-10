<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentStatus extends Model
{
    use HasFactory;
    protected $table='student_statuses';

    protected $fillable=['application_id','status','feedback'];

    public function appstatus(){
       
        return $this->belongsTo(ApplicationStatus::class,'status','id');
    }
}
