<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-end p-2">
                     <a href="{{ route('agency.all.apllication') }}" class="px-4 py-2 bg-green-700 text-white hover:bg-green-500 rounded-md">All Application</a>
                  
                </div>
                
        
        <div class="p-2">
          
        </div>
        <div class="row">
        <div class="col-5">
             <div class="p-4 ">
             <div class="p-3 pt-6">
               

               


              <div class="bg-white rounded-lg p-5 shadow">
                <h2 class="h6 font-weight-bold text-center mb-4">Application Status Progress</h2>

                <!-- Progress bar 3 -->
                <div class="progress mx-auto" data-value='{{$students->appstatus->percentage ?? "0"}}'>
                  <span class="progress-left">
                                <span class="progress-bar border-success"></span>
                  </span>
                  <span class="progress-right">
                                <span class="progress-bar border-success"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">{{$students->appstatus->percentage ?? '0'}}<sup class="small">%</sup></div>
                  </div>
                </div>
                <!-- END -->

            </div>

                 
            
              
          </div>
       </div>      
        </div> 
        <div class="col-7">
            <div class="card">
                        <div class="card-body">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <td>date</td>
                                        <td>status</td>
                                        <td>file</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($all_status as $k=>$val)  
                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{date('d/m/Y',strtotime($val->created_at)) ?? 'N/A'}}</td>
                                        <td>{{$val->appstatus->name ?? 'N/A'}}</td>
                                        <td> 
                                                @if ($val->status_file &&
                                                    file_exists(public_path('uploads/status/' . $val->status_file)))
                                                    <a class="text-black badge badge-danger"
                                                        href="{{ asset('uploads/status/' . $val->status_file) }}"
                                                        download><i class="fa fa-file fa-2x" aria-hidden="true"></i>Download</a>
                                                @else
                                                    <h6><span class="badge badge-danger">no file</span></h6>
                                                @endif
                                            </td>

                                          
                                    </tr>
                                  @endforeach  
                                </tbody>
                                
                            </table>
                            
                        </div>
                        
                    </div>
        </div>
        </div>   
        <div class="p-3 pt-6 row">
             <div class="col-6">
            <table class="table table-striped table-bordered ">
           
                <tbody>
                    <tr class="p-3">
                        <th  scope="col">Student Name</th>
                        <td>{{ $students['user']->student_name ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <td>{{ $students['user']->email ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mobile Number</th>
                        <td>{{ $students['user']->mobile_number ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Nationality</th>
                        <td>{{ $students->nationality ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Passport / IC Number</th>
                        <td>{{ $students->passport_number ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Date of Birth</th>
                        <td>{{ $students->date_of_birth  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Passport Issue Date</th>
                        <td>{{ $students->passport_issue_date ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Obtain Single Entry Visa From</th>
                        <td>{{ $students->obtain_single_entry_visa  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant E-mail Id</th>
                        <td>{{ $students->applicant_email_id  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Sex</th>
                        <td>{{ $students->sex ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant Permanent Add</th>
                        <td>{{ $students->applicant_permanent_add  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant Postal Code</th>
                        <td>{{ $students->applicant_postal_code ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Country</th>
                        <td>{{ $students->country  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Resident Number</th>
                        <td>{{ $students->resident_number  ?? 'N/A'}}</td>
                    </tr>


                    <tr>
                        <th scope="col">Programme</th>
                        <td>{{ $students->programme  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Subject</th>
                        <td>{{ $students->subject  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant Name</th>
                        <td>{{ $students->applicant_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Passport Issued Place</th>
                        <td>{{ $students->passport_issued_place  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Passport Expiry Date</th>
                        <td>{{ $students->passport_expiry_date  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant Mobile Number</th>
                        <td>{{ $students->applicant_mobile_number  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Staff/Agent E-mail Id</th>
                        <td>{{ $students->agent_email_id  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Marital Status</th>
                        <td>{{ $students->marital  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant City</th>
                        <td>{{ $students->applicant_city  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Applicant State</th>
                        <td>{{ $students->applicant_state  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mobile Number</th>
                        <td>{{ $students->mobile_number ?? 'N/A' }}</td>
                    </tr>


                    <tr>
                        <th scope="col">Correspondence Address</th>
                        <td>{{ $students->correspondence_address  ?? 'N/A'}}</td>
                    </tr>
                   
                        
                </tbody>
            
            </table>
        </div>
         <div class="col-6">
             <table class="table table-striped table-bordered ">
           
                <tbody>
                    
                    <tr>
                        <th scope="col">Correspondence Address</th>
                        <td>{{ $students->correspondence_address  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Postal Code</th>
                        <td>{{ $students->postal_code  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Country</th>
                        <td>{{ $students->country_2 ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Resident Number</th>
                        <td>{{ $students->resident_number_2  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Father's Tel No</th>
                        <td>{{ $students->father_tel_no ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mother's Name</th>
                        <td>{{ $students->mother_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mother's Occupation</th>
                        <td>{{ $students->mother_occupation  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Guardian Tel No</th>
                        <td>{{ $students->guardian_tel_no  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Highest Qualification</th>
                        <td>{{ $students->highest_qualification  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Year Of Passing</th>
                        <td>{{ $students->year_of_passing  ?? 'N/A'}}</td>
                    </tr>


                    <tr>
                        <th scope="col">City</th>
                        <td>{{ $students->city  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">State</th>
                        <td>{{ $students->state  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mobile Number</th>
                        <td>{{ $students->mobile_number_2  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Father's Name</th>
                        <td>{{ $students->father_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Father's Occupation</th>
                        <td>{{ $students->father_occupation ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Mother Tel No</th>
                        <td>{{ $students->mother_tel_no  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Gurdian's Name</th>
                        <td>{{ $students->gurdian_name  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Gurdian's Occupation</th>
                        <td>{{ $students->gurdian_occupation  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Overall Grade</th>
                        <td>{{ $students->grade  ?? 'N/A'}}</td>
                    </tr>


                    <tr>
                        <th scope="col">Applicant Name (as in Passport)</th>
                        <td>{{ $students->applicant_name_2  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Are you currently studying in any Malaysian University/College ?</th>
                        <td>{{ $students->study ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Passport / IC Number</th>
                        <td>{{ $students->passport_number_2  ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Do you have Current Malaysian Visa Pass Active ?</th>
                        <td>{{ $students->visa_pass  ?? 'N/A'}}</td>
                    </tr>
                        
                </tbody>
            
            </table>
          </div>  
        </div>

        <div class="row p-3 pt-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">SI. NO.</th>
                    <th scope="col">Upload Document Example Link</th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Upload Document</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td>Page Link</td>
                        <td>
                            {{ $students->health_declaration }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/health') }}/{{ $students->health_declaration_file }}" download><img src="{{ asset('uploads/health') }}/{{ $students->health_declaration_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row" class="text-center">2</th>
                        <td>Page Link</td>
                        <td>
                            {{ $students->passport_scanned }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/passport') }}/{{ $students->passport_scanned_file }}" download><img src="{{ asset('uploads/passport') }}/{{ $students->passport_scanned_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>Page Link</td>
                        <td>
                            {{ $students->photo }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/photo') }}/{{ $students->photo_file }}" download><img src="{{ asset('uploads/photo') }}/{{ $students->photo_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="text-center">4</th>
                        <td>Page Link</td>
                        <td>
                            {{ $students->academic_certificate_1 }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/certificates') }}/{{ $students->academic_certificate_file_1 }}" download><img src="{{ asset('uploads/certificates') }}/{{ $students->academic_certificate_file_1 }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="text-center">5</th>
                        <td>Page Link</td>
                        <td>
                            {{ $students->academic_certificate_2 }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/certificates') }}/{{ $students->academic_certificate_file_2 }}" download><img src="{{ asset('uploads/certificates') }}/{{ $students->academic_certificate_file_2 }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
           
        </div>
        

        <div class="p-4 pt-6">
            <a href="{{ route('agency.application.edit',$students->id) }}">
                <button type="button" class="btn btn-info float-right">Edit</button>
            </a>
        </div>
    
  </div>


  <style type="text/css">
      table tr th {
        padding-left: 10px !important;
      }

  </style>

  <style type="text/css">
.status-border {
    border: #f9a51c solid 1px;
    border-radius: 5px;
    padding: 5px;
    width: 100%;
    float: left;
    margin-top: 10px;
}

.progress {
  width: 150px;
  height: 150px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}


  </style>


  <script type="text/javascript">
      $(function() {

  $(".progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .progress-bar');
    var right = $(this).find('.progress-right .progress-bar');

    if (value > 0) {
      if (value <= 50) {
        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
      } else {
        right.css('transform', 'rotate(180deg)')
        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
      }
    }

  })

  function percentageToDegrees(percentage) {

    return percentage / 100 * 360

  }

});
  </script>
</x-admin-layout>
