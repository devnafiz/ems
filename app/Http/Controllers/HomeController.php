<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentRegister;
use App\Models\StudentStatus;

class HomeController extends Controller
{
    public function searchstatus(){

     return view('tracking');
    }

    public function searchApplication(Request $request){
       $search_data =$this->searchValidation();

       $searchResult = StudentRegister::with('user','studentStatus')
                      ->join('users', 'users.id', '=', 'student_registers.student_id')
                      ->select('student_registers.*','users.student_name','users.generated_id','users.email','users.mobile_number');
                  
       $searchResult  =$searchResult->where('generated_id',$search_data['student_id'])->where('passport_number',$search_data['passport_number'])->first(); 
       if(isset($searchResult->id)){

          $student_status = StudentStatus::where('application_id', $searchResult->id)->get();
       }else{

         $student_status='0';
       }
          
      
          
         //dd($student_status);
       return view('tracking_info',compact('searchResult','student_status'));

    }


    // public function studentInfo(Request $request){
    //     return view('tracking_info');
    // }



    public function searchValidation(){

         $search_data= request()->validate([

           'student_id'=>'required|string',
           'passport_number'=>'required|string' 


         ]);

         return $search_data;

    }
}
