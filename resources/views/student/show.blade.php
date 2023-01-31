<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        
        <div class="p-2">
            <h1 class="display-6 text-center">Student Application Information</h1>
        </div>
        <br/>
        <div class="row">
            <div class="col-6">
                @if($all_status!='')
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
                  @endif  
            </div>    
            
        </div>
        <br/>

        <div class="row">
            <div class="col-6">
                <div class="p-3 pt-6">
            <table class="table table-striped table-bordered ">
            @foreach ($students as $student)
                <tbody>
                    <tr >
                        <th scope="row" class="px-5">Student Name</th>
                        <td>{{ $user->student_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Mobile Number</th>
                        <td>{{ $user->mobile_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Nationality</th>
                        <td>{{ $student->nationality }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Passport / IC Number</th>
                        <td>{{ $student->passport_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Date of Birth</th>
                        <td>{{ $student->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Passport Issue Date</th>
                        <td>{{ $student->passport_issue_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Obtain Single Entry Visa From</th>
                        <td>{{ $student->obtain_single_entry_visa }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant E-mail Id</th>
                        <td>{{ $student->applicant_email_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Sex</th>
                        <td>{{ $student->sex }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant Permanent Add</th>
                        <td>{{ $student->applicant_permanent_add }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant Postal Code</th>
                        <td>{{ $student->applicant_postal_code }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Country</th>
                        <td>{{ $student->country }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Resident Number</th>
                        <td>{{ $student->resident_number }}</td>
                    </tr>


                    <tr>
                        <th scope="row" class="px-5">Programme</th>
                        <td>{{ $student->programme }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Subject</th>
                        <td>{{ $student->subject }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant Name</th>
                        <td>{{ $student->applicant_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row"class="px-5">Passport Issued Place</th>
                        <td>{{ $student->passport_issued_place }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Passport Expiry Date</th>
                        <td>{{ $student->passport_expiry_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant Mobile Number</th>
                        <td>{{ $student->applicant_mobile_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Staff/Agent E-mail Id</th>
                        <td>{{ $student->agent_email_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Marital Status</th>
                        <td>{{ $student->marital }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant City</th>
                        <td>{{ $student->applicant_city }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Applicant State</th>
                        <td>{{ $student->applicant_state }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Mobile Number</th>
                        <td>{{ $student->mobile_number }}</td>
                    </tr>


                   
                        
                </tbody>
            
            </table>
        </div>
                
            </div>

             <div class="col-6">
                <div class="p-3 pt-6">
            <table class="table table-striped table-bordered ">
          
                <tbody>
                    


                    <tr>
                        <th scope="row" class="px-5">Correspondence Address</th>
                        <td>{{ $student->correspondence_address }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Postal Code</th>
                        <td>{{ $student->postal_code }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Country</th>
                        <td>{{ $student->country_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Resident Number</th>
                        <td>{{ $student->resident_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Father's Tel No</th>
                        <td>{{ $student->father_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Mother's Name</th>
                        <td>{{ $student->mother_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Mother's Occupation</th>
                        <td>{{ $student->mother_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Guardian Tel No</th>
                        <td>{{ $student->guardian_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Highest Qualification</th>
                        <td>{{ $student->highest_qualification }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Year Of Passing</th>
                        <td>{{ $student->year_of_passing }}</td>
                    </tr>


                    <tr>
                        <th scope="row" class="px-5">City</th>
                        <td>{{ $student->city }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">State</th>
                        <td>{{ $student->state }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Mobile Number</th>
                        <td>{{ $student->mobile_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Father's Name</th>
                        <td>{{ $student->father_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Father's Occupation</th>
                        <td>{{ $student->father_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Mother Tel No</th>
                        <td>{{ $student->mother_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Gurdian's Name</th>
                        <td>{{ $student->gurdian_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Gurdian's Occupation</th>
                        <td>{{ $student->gurdian_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Overall Grade</th>
                        <td>{{ $student->grade }}</td>
                    </tr>


                    <tr>
                        <th scope="row" class="px-5">Applicant Name (as in Passport)</th>
                        <td>{{ $student->applicant_name_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Are you currently studying in any Malaysian University/College ?</th>
                        <td>{{ $student->study }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Passport / IC Number</th>
                        <td>{{ $student->passport_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Do you have Current Malaysian Visa Pass Active ?</th>
                        <td>{{ $student->visa_pass }}</td>
                    </tr>
                        
                </tbody>
            
            </table>
        </div>
                
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
                            {{ $student->health_declaration }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/health') }}/{{ $student->health_declaration_file }}" download><img src="{{ asset('uploads/health') }}/{{ $student->health_declaration_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row" class="text-center">2</th>
                        <td>Page Link</td>
                        <td>
                            {{ $student->passport_scanned }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/passport') }}/{{ $student->passport_scanned_file }}" download><img src="{{ asset('uploads/passport') }}/{{ $student->passport_scanned_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>Page Link</td>
                        <td>
                            {{ $student->photo }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/photo') }}/{{ $student->photo_file }}" download><img src="{{ asset('uploads/photo') }}/{{ $student->photo_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="text-center">4</th>
                        <td>Page Link</td>
                        <td>
                            {{ $student->academic_certificate_1 }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/certificates') }}/{{ $student->academic_certificate_file_1 }}" download><img src="{{ asset('uploads/certificates') }}/{{ $student->academic_certificate_file_1 }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row" class="text-center">5</th>
                        <td>Page Link</td>
                        <td>
                            {{ $student->academic_certificate_2 }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/certificates') }}/{{ $student->academic_certificate_file_2 }}" download><img src="{{ asset('uploads/certificates') }}/{{ $student->academic_certificate_file_2 }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            @endforeach
        </div>
        

        <div class="p-4 pt-6">
            <a href="{{ route('student.registration.edit',Auth::user()->id) }}">
                <button type="button" class="btn btn-info float-right">Edit</button>
            </a>
        </div>
    
  </div>
</x-admin-layout>
