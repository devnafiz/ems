<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationStatus;

class ApplicationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['all_data'] = ApplicationStatus::get();
       //dd($data['all_data']);

       return view('admin.status.index',$data);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data['edit_data'] = ApplicationStatus::where('id',$id)->first();
         return view('admin.status.edit',$data);
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

        $status_data = $this->StatusEditValidation();
        $status= ApplicationStatus::where('id', $id)->first();
        //if(isset($status_data['status'])){
           // $status_data['status']='0';
        //}else{
           //  $status_data['status']= '1';
        //}
        //dd($status_data);


        $status->update($status_data);
        $notification = array(
            'message' => 'Status updated',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.status.index')->with($notification);


        
    }


    public function StatusInactive($id){

       ApplicationStatus::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Status Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function StatusActive($id){

        ApplicationStatus::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Status active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
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

    public function StatusEditValidation()
    {
        $status_data = request()->validate([
            
            'name' => 'nullable|string',
            
            'status' => 'nullable|string',
            
        ]);

        return $status_data;
    }
}
