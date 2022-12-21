
@extends('layouts.pdf')

@section('title')
    {{ $extra['module_name']  }}
@endsection



@section('content')
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-end p-2 space-x-2">
                   
        </div>
        
        <div class="p-2">
            <h1 class="display-6 text-center">Details Information</h1>
        </div>

    <div class="row">
          <div class="p-4 pt-6  column" >
             <div class="p-3 pt-6">
            <table class=" table table-bordered table-striped" border="1">
          
                <tbody>

                    <tr>
                        <td scope="row" style="width:100%">Student Name</td>
                        <td style="width:100%">{{$items->student->student_name}}</td>
                    </tr>
                    
                   



                 </tbody>
                 
            </table>
                
        </div>
    </div>

    <div class="p-4 pt-6 col-6 column" >
             <div class="p-3 pt-6">
            <table class=" table table-bordered" border="1">
          
                <tbody>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $items->mobile_number }}</td>
                    </tr>
                     
                   
                   


                 </tbody>
            </table>
                
        </div>
    </div>
  </div>

  <div class="row">
     
                   

  </div>  
    
  </div>

  <style >
      
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
  </style>
@stop
    
