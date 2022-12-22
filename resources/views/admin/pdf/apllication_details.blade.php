
@extends('layouts.pdf')

@section('title')
    {{ $extra['module_name']  }}
@endsection



@section('content')
    <div class="container px-6 grid">
        <div class="flex justify-end p-2 space-x-2">
                   
        </div>
        
        <div class="p-2">
            <h1 class="display-6 text-center">Details Information</h1>
        </div>

    <div class="row">
          <div class="p-4 pt-6  column" >
             <div class="p-3 pt-6 invoice-box">
            <table class="table table-bordered table-striped" style="border:1px solid black;">
          
                <tbody>

                    <tr class="item last">
                        <td scope="row" style="width:100%">Student Name</td>
                        <td style="width:100%;border-left: none;">{{$items->student->student_name}}</td>
                    </tr>
                    <tr class="item last">
                        <td scope="row" style="width:100%">Mobile Number</td>
                        <td style="width:100%;border-left: none;">{{ $items->mobile_number ?? 'N/A'  }}</td>
                    </tr>
                    <tr class="item last">
                        <td scope="row" style="width:100%">Nationality</td>
                        <td style="width:100%;border-left: none;">{{ $items->nationality ?? 'N/A'  }}</td>
                    </tr>

                    <tr class="item last">
                        <td style="width:100%">Passport Number</td>
                        <td style="width:100%;border-left: none;">{{ $items->passport_number ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Date of Birth</td>
                        <td style="width:100%;border-left: none;">{{ $items->date_of_birth  ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Passport Issue Date</td>
                        <td style="width:100%;border-left: none;">{{ $items->passport_issue_date  ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Obtain Single Entry Visa From</td>
                        <td style="width:100%;border-left: none;">{{ $items->obtain_single_entry_visa ?? 'N/A'  }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Applicant E-mail Id</td>
                        <td style="width:100%;border-left: none;">{{ $items->applicant_email_id ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Sex</td>
                        <td style="width:100%;border-left: none;">{{ $items->sex ?? 'N/A'  }}</td>
                    </tr>

                     <tr class="item last">
                        <td style="width:100%">Applicant Permanent Add</td>
                        <td style="width:100%;border-left: none;">{{ $items->applicant_permanent_add ?? 'N/A'  }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Applicant Postal Code</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_postal_code ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Country</td>
                        <td style="width:100%;border-left: none">{{ $items->country ?? 'N/A'  }}</td>
                    </tr>

                    <tr class="item last">
                        <td style="width:100%">Resident Number</td>
                        <td style="width:100%"> {{ $items->resident_number ?? 'N/A' }}</td>
                    </tr >
                    <tr class="item last">
                        <td style="width:100%">Subject</td>
                        <td style="width:100%">{{ $extra['subject'] ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%">Programme</td>
                        <td style="width:100%">{{ $extra['programme'] ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%">Applicant Name</td>
                        <td style="width:100%">{{ $items->applicant_name ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%">Passport Issued Place</td>
                        <td style="width:100%">{{ $items->passport_issued_place ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%">Passport Expiry Date</td>
                        <td style="width:100%">{{ $items->passport_expiry_date ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%">Applicant Mobile Number</td>
                        <td style="width:100%">{{ $items->applicant_mobile_number ?? 'N/A' }}</td>
                    </tr>

                    <tr class="item last">
                        <td style="width:100%">Staff/Agent E-mail Id</td>
                        <td style="width:100%">{{ $items->student->agent_email_id ?? 'N/A'}}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Marital Status</td>
                        <td style="width:100%">{{ $items->marital ?? 'N/A'}}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%">Applicant City</td>
                        <td style="width:100%">{{ $items->applicant_city ?? 'N/A'}}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Applicant State</td>
                        <td style="width:100%">{{ $items->applicant_state }}</td>
                    </tr>
                   
                    
                   



                 </tbody>
                 
            </table>
                
        </div>
    </div>

    <div class="p-4 pt-6 col-6 column" >
             <div class="p-3 pt-6 invoice-box">
            <table class=" table " style="">
          
                <tbody>
                    <tr class="item">
                        <td scope="row" style="" class="mt-1 p-2">Mobile Number</td>
                        <td style="border-left:none;">{{ $items->mobile_number }}</td>
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
  height: auto; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 10px;
            /* border: 1px solid #eee; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 11px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: black;
        }

.invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-right: none;
        }
.invoice-box table tr.item td {
            border: solid 1px;
        }
     .invoice-box table tr.item.last td {
            border-bottom: none;
        }



.invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
.invoice-box table td {
            padding-left: 5px;
            padding-right: 5px;
            vertical-align: top;
        }

  </style>
@stop
    
