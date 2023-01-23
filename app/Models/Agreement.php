<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;
    protected $table='agency_license';

    public function user(){

       return $this->belongsTo(User::class,'user_id','id');
    }
}
