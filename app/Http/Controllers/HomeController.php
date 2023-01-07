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

    public function searchApplication(Request $request){
    $search_data =$this->searchValidation();

      dd($search_data);

    }


    public function studentInfo(Request $request){
        return view('tracking_info');
    }



    public function searchValidation(){

         $search_data= request()->validate([

           'student_id'=>'required|string',
           'passport_number'=>'required|string' 


         ]);

         return $search_data;

    }
}
