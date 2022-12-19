<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        
        <div class="p-2">
            <h1 class="display-6 text-center">Student Information</h1>
        </div>
        <div class="p-3 pt-6">
            <table class="table table-striped">
            @foreach ($students as $student)
                <tbody>
                    <tr>
                        <th scope="row">Student Name</th>
                        <td>{{ $user->student_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mobile Number</th>
                        <td>{{ $user->mobile_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nationality</th>
                        <td>{{ $student->nationality }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Passport / IC Number</th>
                        <td>{{ $student->passport_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Date of Birth</th>
                        <td>{{ $student->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Passport Issue Date</th>
                        <td>{{ $student->passport_issue_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Obtain Single Entry Visa From</th>
                        <td>{{ $student->obtain_single_entry_visa }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant E-mail Id</th>
                        <td>{{ $student->applicant_email_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Sex</th>
                        <td>{{ $student->sex }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant Permanent Add</th>
                        <td>{{ $student->applicant_permanent_add }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant Postal Code</th>
                        <td>{{ $student->applicant_postal_code }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Country</th>
                        <td>{{ $student->country }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Resident Number</th>
                        <td>{{ $student->resident_number }}</td>
                    </tr>


                    <tr>
                        <th scope="row">Programme</th>
                        <td>{{ $student->programme }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Subject</th>
                        <td>{{ $student->subject }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant Name</th>
                        <td>{{ $student->applicant_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Passport Issued Place</th>
                        <td>{{ $student->passport_issued_place }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Passport Expiry Date</th>
                        <td>{{ $student->passport_expiry_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant Mobile Number</th>
                        <td>{{ $student->applicant_mobile_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Staff/Agent E-mail Id</th>
                        <td>{{ $student->agent_email_id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Marital Status</th>
                        <td>{{ $student->marital }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant City</th>
                        <td>{{ $student->applicant_city }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Applicant State</th>
                        <td>{{ $student->applicant_state }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mobile Number</th>
                        <td>{{ $student->mobile_number }}</td>
                    </tr>


                    <tr>
                        <th scope="row">Correspondence Address</th>
                        <td>{{ $student->correspondence_address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Postal Code</th>
                        <td>{{ $student->postal_code }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Country</th>
                        <td>{{ $student->country_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Resident Number</th>
                        <td>{{ $student->resident_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Father's Tel No</th>
                        <td>{{ $student->father_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mother's Name</th>
                        <td>{{ $student->mother_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mother's Occupation</th>
                        <td>{{ $student->mother_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Guardian Tel No</th>
                        <td>{{ $student->guardian_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Highest Qualification</th>
                        <td>{{ $student->highest_qualification }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Year Of Passing</th>
                        <td>{{ $student->year_of_passing }}</td>
                    </tr>


                    <tr>
                        <th scope="row">City</th>
                        <td>{{ $student->city }}</td>
                    </tr>
                    <tr>
                        <th scope="row">State</th>
                        <td>{{ $student->state }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mobile Number</th>
                        <td>{{ $student->mobile_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Father's Name</th>
                        <td>{{ $student->father_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Father's Occupation</th>
                        <td>{{ $student->father_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Mother Tel No</th>
                        <td>{{ $student->mother_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Gurdian's Name</th>
                        <td>{{ $student->gurdian_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Gurdian's Occupation</th>
                        <td>{{ $student->gurdian_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Overall Grade</th>
                        <td>{{ $student->grade }}</td>
                    </tr>


                    <tr>
                        <th scope="row">Applicant Name (as in Passport)</th>
                        <td>{{ $student->applicant_name_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Are you currently studying in any Malaysian University/College ?</th>
                        <td>{{ $student->study }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Passport / IC Number</th>
                        <td>{{ $student->passport_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Do you have Current Malaysian Visa Pass Active ?</th>
                        <td>{{ $student->visa_pass }}</td>
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
