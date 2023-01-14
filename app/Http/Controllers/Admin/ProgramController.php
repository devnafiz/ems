<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use DB;
use Auth;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_data']= Program::paginate(10);

        return view('admin.programe.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.programe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          //$programme_data = $this->ProgrammeDataValidation();
          //dd($programme_data);

         try {
            $transaction_id = DB::transaction(function () use ($request) {
              //dd('ok');
           

                $data=[
                   'programmme_name'=>$request->programme_name,
                   'status'=>($request->status)?'1':'0'

                ];
                //dd($data);

                $program= new Program();
                $program->programme_name =$request->programme_name;
                $program->save();  
                
         
         // Program::create($data);

          });

            $notification = array(
            'message' => 'Create Program ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.programmes.index')->with($notification);
           } catch (\Throwable $th) {
            return redirect()
                ->back()
                ->withFlashDanger('Data not added!');
        }
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

      $edit_data =Program::where('programme_id',$id)->first();
       return view('admin.programe.edit',compact('edit_data'));
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
      
         $program =Program::where('programme_id',$id)->first();

         $program->where('programme_id',$id)->update($status_data);
          $notification = array(
            'message' => 'Programme updated',
            'alert-type' => 'success'
          );

        return redirect()->route('admin.programmes.index')->with($notification);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program =Program::where('programme_id',$id)->first();
        //dd($program);

        if($program){

            $program->where('programme_id',$id)->delete();
             $notification = array(
            'message' => ' Program deleted successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.programmes.index')->with($notification);
        }
    }


   public function StatusEditValidation()
    {
        $status_data = request()->validate([
            
            'programme_name' => 'nullable|string',
            
            'status' => 'nullable|string',
            
        ]);

        return $status_data;
    }
}
