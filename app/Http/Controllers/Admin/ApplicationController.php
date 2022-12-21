<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRegister;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
//use Barryvdh\DomPDF\Facade as PDF;

use DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['applications'] =StudentRegister::paginate(10);
         //dd($data['applications']);
        return view('admin.application.index',$data);
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
        $data['application_details'] =StudentRegister::findOrfail($id);
        $data['programme']=DB::table('programme')->where('programme_id',$data['application_details']->programme)->first()->programme_name;
        //dd($data['programme']);
        $data['subject']=DB::table('subject')->where('subject_id',$data['application_details']->subject)->first()->subject_name;

        //dd($data['subject']);
        return view('admin.application.details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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


    public function pdf(Request $request){
      $id = $request->id;
      $item =$data['application_details'] =StudentRegister::findOrfail($id);

        $now = new \DateTime();
       
        $date = $now->format('d-m-Y' . ' h:i:s');
         //dd($date);
        $extra = array(
            'current_date_time' => $date,
            'module_name' => 'Apllication Details',
           
        );

        //dd($extra);
         $pdf = PDF::loadView('admin.pdf'.'.apllication_details', ['items' => $item, 'extra' => $extra])->setPaper('a4', 'landscape');

         //dd($pdf);
         return $pdf->download($extra['current_date_time'] . '_' . $extra['module_name'] . '.pdf');


    }
}
