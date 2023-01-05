<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentRegister;

class HomeController extends Controller
{
    public function searchstatus(){

     return view('tracking');
    }

    public function studentInfo(Request $request){
        return view('tracking_info');
    }
}
