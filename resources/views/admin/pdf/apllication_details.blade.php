
@extends('layouts.pdf')

@section('title')
    {{ $extra['module_name']  }}
@endsection



@section('content')
    <div class="container px-6 grid">
        <div class="flex justify-end p-2 space-x-2">
                   
        </div>
        
        <div class="invoice-box">

        <table class="table  ">
             <tbody>
                <tr>
                    <td class="title" style="vertical-align: bottom;width:100%">
                       <span style="color: black; font-weight: 500;font-size:14px;">Student Information</span> <br>
                       <span style="vertical-align: bottom; color: green;">Student Name:{{($items->user->student_name) ?? ''}}</span><br>
                       <span style="vertical-align: bottom; color: green;">Student Id:{{($items->user->generated_id) ?? ''}}</span><br>

                   </td>
                    <td style="float: left;width:100%">
                         @if(!empty($users->pro_image))
                     
                         <img src="./uploads/profile/{{$users->pro_image}}" />
                        @else

                        
                         <img src="./uploads/profile/no-image.png"  height="100px" width="100px" />
                      @endif
                    </td>
                </tr>
            </tbody>
        </table>
            
        </div>
        <br/>

    <div class="row">
          <div class="p-4 pt-6  " >
             <div class="p-3 pt-6 invoice-box">
            <table class="table table-bordered table-striped" style="border:1px solid black;">
          
                <tbody>
                 
                    <tr class="item last">
                        <td scope="row" style="width:100%;font-weight: bold; font-size: 14px;">Student Name</td>
                        <td style="width:100%;border-left: none;">{{$items->user->student_name}}</td>
                    </tr>
                    <tr class="item last">
                        <td scope="row" style="width:100%;font-weight: bold; font-size: 14px;">Mobile Number</td>
                        <td style="width:100%;border-left: none;">{{ $items->mobile_number ?? 'N/A'  }}</td>
                    </tr>
                    <tr class="item last">
                        <td scope="row" style="width:100%;font-weight: bold; font-size: 14px;">Nationality</td>
                        <td style="width:100%;border-left: none;">{{ $items->nationality ?? 'N/A'  }}</td>
                    </tr>

                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Passport Number</td>
                        <td style="width:100%;border-left: none;">{{ $items->passport_number ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Date of Birth</td>
                        <td style="width:100%;border-left: none;">{{ $items->date_of_birth  ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Passport Issue Date</td>
                        <td style="width:100%;border-left: none;">{{ $items->passport_issue_date  ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Obtain Single Entry Visa From</td>
                        <td style="width:100%;border-left: none;">{{ $items->obtain_single_entry_visa ?? 'N/A'  }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant E-mail Id</td>
                        <td style="width:100%;border-left: none;">{{ $items->applicant_email_id ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Sex</td>
                        <td style="width:100%;border-left: none;">{{ $items->sex ?? 'N/A'  }}</td>
                    </tr>

                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant Permanent Add</td>
                        <td style="width:100%;border-left: none;">{{ $items->applicant_permanent_add ?? 'N/A'  }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant Postal Code</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_postal_code ?? 'N/A' }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Country</td>
                        <td style="width:100%;border-left: none">{{ $items->country ?? 'N/A'  }}</td>
                    </tr>

                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Resident Number</td>
                        <td style="width:100%;border-left: none"> {{ $items->resident_number ?? 'N/A' }}</td>
                    </tr >
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Subject</td>
                        <td style="width:100%;border-left: none">{{ $extra['subject'] ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Programme</td>
                        <td style="width:100%;border-left: none">{{ $extra['programme'] ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant Name</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_name ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Passport Issued Place</td>
                        <td style="width:100%;border-left: none">{{ $items->passport_issued_place ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Passport Expiry Date</td>
                        <td style="width:100%;border-left: none">{{ $items->passport_expiry_date ?? 'N/A' }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant Mobile Number</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_mobile_number ?? 'N/A' }}</td>
                    </tr>

                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Staff/Agent E-mail Id</td>
                        <td style="width:100%;border-left: none">{{ $items->student->agent_email_id ?? 'N/A'}}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Marital Status</td>
                        <td style="width:100%;border-left: none">{{ $items->marital ?? 'N/A'}}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant City</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_city ?? 'N/A'}}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%">Applicant State</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_state }}</td>
                    </tr>
                   
                    
                   



                 </tbody>
                 
            </table>
                
        </div>
    </div>

    <div class="p-4 pt-6  " >
             <div class="p-3 pt-6 invoice-box">
            <table class=" table table-striped" style="border:1px solid black;">
          
                <tbody>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Mobile Number</td>
                        <td style="width:100%;border-left: none">{{ $items->mobile_number }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Correspondence Address</td>
                        <td style="width:100%;border-left: none">{{ $items->correspondence_address }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Postal Code</td>
                        <td style="width:100%;border-left: none">{{ $items->postal_code }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Country</td>
                        <td style="width:100%;border-left: none">{{ $items->country_2 }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Resident Number</td>
                        <td style="width:100%;border-left: none">{{ $items->resident_number_2 }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Father's Tel No</td>
                        <td style="width:100%;border-left: none">{{ $items->father_tel_no }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Mother Name</td>
                        <td style="width:100%;border-left: none">{{ $items->mother_name }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Mother Occupation</td>
                        <td style="width:100%;border-left: none">{{ $items->mother_occupation }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Guardian Tel No</td>
                        <td style="width:100%;border-left: none">{{ $items->guardian_tel_no }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Highest Qualification</td>
                        <td style="width:100%;border-left: none">{{ $items->highest_qualification }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Year Of Passing</td>
                        <td style="width:100%;border-left: none">{{ $items->year_of_passing }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">City</td>
                        <td style="width:100%;border-left: none">{{ $items->city }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">State</td>
                        <td style="width:100%;border-left: none">{{ $items->state }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Mobile Number</td>
                        <td style="width:100%;border-left: none">{{ $items->mobile_number_2 }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Father's Name</td>
                        <td style="width:100%;border-left: none">{{ $items->father_name }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Mother Tel No</td>
                        <td style="width:100%;border-left: none">{{ $items->mother_tel_no }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Gurdian's Name</td>
                        <td style="width:100%;border-left: none">{{ $items->gurdian_name }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Gurdian's Occupation</td>
                        <td style="width:100%;border-left: none">{{ $items->gurdian_occupation }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Overall Grade</td>
                        <td style="width:100%;border-left: none">{{ $items->grade }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Applicant Name (as in Passport)</td>
                        <td style="width:100%;border-left: none">{{ $items->applicant_name_2 }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Are you currently studying in any Malaysian University/College ?</td>
                        <td style="width:100%;border-left: none">{{ $items->study }}</td>
                    </tr>
                    <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Passport / IC Number</td>
                        <td style="width:100%;border-left: none">{{ $items->passport_number_2 }}</td>
                    </tr>
                     <tr class="item last">
                        <td style="width:100%;font-weight: bold; font-size: 14px;">Do you have Current Malaysian Visa Pass Active ?</td>
                        <td style="width:100%;border-left: none">{{ $items->visa_pass }}</td>
                    </tr>
                     
                   
                   


                 </tbody>
            </table>

            <table class="table  ">
             <tbody>
                <tr>
                    <td class="title" style="vertical-align: bottom;width:100%">
                       <span style="color: black; font-weight: 500;font-size:16px;">Attached File</span> <br>
                       <hr>
                       <span style="vertical-align: bottom; color: green;">#1.  {{ $items->health_declaration }}</span><br>
                       <span style="vertical-align: bottom; color: green;">#2. {{$items->passport_scanned }}</span><br>
                       <span style="vertical-align: bottom; color: green;">#3. {{ $items->photo }}</span><br>
                       <span style="vertical-align: bottom; color: green;">#4. {{ $items->academic_certificate_1 }}</span><br>
                       <span style="vertical-align: bottom; color: green;">#5. {{ $items->academic_certificate_2 }}</span><br>

                   </td>
                    <td style="float: left;width:100%">
                        
                    </td>
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
      
/*.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: auto;  Should be removed. Only for demonstration 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}*/
.invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 10px;
            /* border: 1px solid #eee; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 13px;
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
            text-align: center;
        }
.invoice-box table td {
            padding-left: 5px;
            padding-right: 5px;
            vertical-align: top;
        }
    .table-striped>tbody>tr:nth-of-type(odd)>* {
        background-color: #93c0dd14;
   
   }


  </style>
@stop
    
