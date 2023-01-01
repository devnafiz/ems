<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['all_data']=User::where('name','student')->orderByDesc('id')->paginate(10);

         return view('admin.student.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['all_data']=User::where('id',$id)->first();
        return view('admin.student.details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $data['edit_data']=User::with('profile')->where('id',$id)->first();
        //dd($data['edit_data']);
         return view('admin.student.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profileEditValidation()
    {
        $profile_data = request()->validate([
            'user_id' => 'nullable|numeric',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            
        ]);

        return $profile_data;
    }


     public function UserDataValidation()
    {
        $user_data = request()->validate([
            'agency_name' => 'nullable|string',
            'student_name' => 'nullable|string',
            'email' => 'required|string',
            'mobile_number' => 'required|string',
            'pro_image' => 'nullable',
            
        ]);

        return $user_data;
    }
}
