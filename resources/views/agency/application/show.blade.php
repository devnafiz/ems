<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-end p-2">
                     <a href="{{ route('agency.all.apllication') }}" class="px-4 py-2 bg-green-700 text-white hover:bg-green-500 rounded-md">All Application</a>
                  
                </div>
                
        
        <div class="p-2">
            <p class="display-7 text-center"><span  style="float:left;font-size: 18px;"> Appllication Status:<span class="badge btn-info">Step One</span> </span>Student Information</p>
        </div>
        <div class="p-3 pt-6">
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
            <a href="{{ route('student.registration.edit',Auth::user()->id) }}">
                <button type="button" class="btn btn-info float-right">Edit</button>
            </a>
        </div>
    
  </div>


  <style type="text/css">
      table tr th {
        padding-left: 10px !important;
      }

  </style>
</x-admin-layout>
