<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table='subject';
    protected $fillable=['subject_name','programme_id'];

    public function programme(){

        return $this->belongsTo(Program::class,'programme_id','programme_id');
    }
}
