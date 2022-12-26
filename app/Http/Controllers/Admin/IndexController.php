<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IndexController extends Controller
{
    public function index(){

        $data['students']=User::where('name','student')->count();
        //dd($data['students']);
        return view('admin.index',$data);
    }
}
