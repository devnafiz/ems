<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-end p-2 space-x-2">
                    <a href="{{ route('admin.all-application.index') }}" class="px-4 py-2 bg-green-700 text-white hover:bg-green-500 rounded-md">All Application</a>
                     <a href="{{ route('admin.application.pdf',$application_details->id) }}" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md">PDF</a>
        </div>
        
        <div class="p-2">
            <h1 class="display-6 text-center">Details Information</h1>
        </div>

       <div class="row">
          <div class="p-4 pt-6 col-6">
            <div class="p-3 pt-6">
                <form >
                    
                    <input type="hidden" name="id" value="{{$application_details->id}}" id="id">
                    <div class="form-group">
                    <label><h3 class="py-2">Application Status:</h3></label> 
                    <select class="selectpicker form-control border-0 mb-1 px-4 py-4 rounded shadow one" name="status" id="status">
                                <option value="" >Select Status</option>
                                @foreach($status as $k =>$val)
                                <option value="{{$val->id}}" >{{$val->name}}</option>
                                @endforeach
                                
                               
                                
                    </select>
                    
                </div>
                <br>
                <div id="showOne" class="myDiv" style="display:none">
                    <textarea cols="85" rows="3" name="feedback" id="feedback">
                        Congratulations,
                        Congratulations, your Visa Approval Letter (VAL) has been Approved.
                    </textarea>
                </div>
                <button  class="btn btn-info float-right my-3 " id="btn-submit">Update Status</button>
                    
                </form>
                
           </div>
            

          </div>
          <div class="p-4 col-6">
             <div class="p-3 pt-6">
                 <p>Application Status :&nbsp<span class="badge badge-info px-4">{{$application_details->appstatus->name ?? 'N/A'}}</span></p>
                 
             </div>
              
          </div>
       </div>      

    <div class="row">
          <div class="p-4 pt-6 col-6">
             <div class="p-3 pt-6">
            <table class=" table table-bordered table-striped">
          
                <tbody>

                    <tr>
                        <th scope="row" class="mt-1 p-2">Student Name</th>
                        <td>{{ $application_details->user->student_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $application_details->mobile_number ?? 'N/A'  }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Nationality</th>
                        <td>{{ $application_details->nationality ?? 'N/A'  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number ?? 'N/A' }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Date of Birth</th>
                        <td>{{ $application_details->date_of_birth  ?? 'N/A' }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Issue Date</th>
                        <td>{{ $application_details->passport_issue_date  ?? 'N/A' }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Obtain Single Entry Visa From</th>
                        <td>{{ $application_details->obtain_single_entry_visa ?? 'N/A'  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant E-mail Id</th>
                        <td>{{ $application_details->applicant_email_id ?? 'N/A' }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Sex</th>
                        <td>{{ $application_details->sex ?? 'N/A'  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant Permanent Add</th>
                        <td>{{ $application_details->applicant_permanent_add ?? 'N/A'  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant Postal Code</th>
                        <td>{{ $application_details->applicant_postal_code ?? 'N/A' }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Country</th>
                        <td>{{ $application_details->country ?? 'N/A'  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Resident Number</th>
                        <td>{{ $application_details->resident_number ?? 'N/A' }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Subject</th>
                        <td>{{ $subject ?? 'N/A' }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Programme</th>
                        <td>{{ $programme ?? 'N/A' }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Applicant Name</th>
                        <td>{{ $application_details->applicant_name ?? 'N/A' }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Passport Issued Place</th>
                        <td>{{ $application_details->passport_issued_place ?? 'N/A' }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Passport Expiry Date</th>
                        <td>{{ $application_details->passport_expiry_date ?? 'N/A' }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Applicant Mobile Number</th>
                        <td>{{ $application_details->applicant_mobile_number ?? 'N/A' }}</td>
                    </tr>

                    <tr>
                        <th scope="row" class="mt-1 p-2">Staff/Agent E-mail Id</th>
                        <td>{{ $application_details->student->agent_email_id ?? 'N/A'}}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Marital Status</th>
                        <td>{{ $application_details->marital ?? 'N/A'}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Applicant City</th>
                        <td>{{ $application_details->applicant_city ?? 'N/A'}}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant State</th>
                        <td>{{ $application_details->applicant_state }}</td>
                    </tr>
                   



                 </tbody>
                 <tfoot>
                      <tr>
                        <th scope="row" class="mt-1 p-2"></th>
                        <td></td>
                    </tr>
                 </tfoot>
            </table>
                
        </div>
    </div>

    <div class="p-4 pt-6 col-6">
             <div class="p-3 pt-6">
            <table class=" table table-bordered">
          
                <tbody>

                     
                   
                     <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $application_details->mobile_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Correspondence Address</th>
                        <td>{{ $application_details->correspondence_address }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Postal Code</th>
                        <td>{{ $application_details->postal_code }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Country</th>
                        <td>{{ $application_details->country_2 }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Resident Number</th>
                        <td>{{ $application_details->resident_number_2 }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Father's Tel No</th>
                        <td>{{ $application_details->father_tel_no }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Mother Name</th>
                        <td>{{ $application_details->mother_name }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Mother Occupation</th>
                        <td>{{ $application_details->mother_occupation }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Guardian Tel No</th>
                        <td>{{ $application_details->guardian_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Highest Qualification</th>
                        <td>{{ $application_details->highest_qualification }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Year Of Passing</th>
                        <td>{{ $application_details->year_of_passing }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">City</th>
                        <td>{{ $application_details->city }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">State</th>
                        <td>{{ $application_details->state }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $application_details->mobile_number_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Father's Name</th>
                        <td>{{ $application_details->father_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mother Tel No</th>
                        <td>{{ $application_details->mother_tel_no }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Gurdian's Name</th>
                        <td>{{ $application_details->gurdian_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Gurdian's Occupation</th>
                        <td>{{ $application_details->gurdian_occupation }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Overall Grade</th>
                        <td>{{ $application_details->grade }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Applicant Name (as in Passport)</th>
                        <td>{{ $application_details->applicant_name_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Are you currently studying in any Malaysian University/College ?</th>
                        <td>{{ $application_details->study }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Passport / IC Number</th>
                        <td>{{ $application_details->passport_number_2 }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Do you have Current Malaysian Visa Pass Active ?</th>
                        <td>{{ $application_details->visa_pass }}</td>
                    </tr>



                 </tbody>
            </table>
                
        </div>
    </div>
  </div>

  <div class="row">
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
                            {{ $application_details->health_declaration }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/health') }}/{{ $application_details->health_declaration_file }}" download><img src="{{ asset('uploads/health') }}/{{ $application_details->health_declaration_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                     <tr>
                        <th scope="row" class="text-center">2</th>
                        <td>Page Link</td>
                        <td>
                            {{ $application_details->passport_scanned }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/passport') }}/{{ $application_details->passport_scanned_file }}" download><img src="{{ asset('uploads/passport') }}/{{ $application_details->passport_scanned_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">3</th>
                        <td>Page Link</td>
                        <td>
                            {{ $application_details->photo }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/photo') }}/{{ $application_details->photo_file }}" download><img src="{{ asset('uploads/photo') }}/{{ $application_details->photo_file }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>
                     <tr>
                        <th scope="row" class="text-center">4</th>
                        <td>Page Link</td>
                        <td>
                            {{ $application_details->academic_certificate_1 }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/certificates') }}/{{ $application_details->academic_certificate_file_1 }}" download><img src="{{ asset('uploads/certificates') }}/{{ $application_details->academic_certificate_file_1 }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>

                     <tr>
                        <th scope="row" class="text-center">5</th>
                        <td>Page Link</td>
                        <td>
                            {{ $application_details->academic_certificate_2 }}
                        </td>
                        <td>
                            <a href="{{ asset('uploads/certificates') }}/{{ $application_details->academic_certificate_file_2 }}" download><img src="{{ asset('uploads/certificates') }}/{{ $application_details->academic_certificate_file_2 }}" alt="img" style="width: 70px; height: 60px" ></a>
                        </td>
                    </tr>


                </tbody>     

  </div>  
    
  </div>

  <script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   

         $("#btn-submit").click(function(e){
        

        e.preventDefault();
 
        var status = $("#status").val();
        var id =$('#id').val();
        var feedback   =$('#feedback').val();
         //alert(feedback );
 
        $.ajax({
           type:'POST',
           url:"{{url('admin/application/status/update/')}}/"+id,
           data:{status:status, application_id:id,feedback:feedback, "_token": "{{ csrf_token() }}"},
           success:function(data){
              alert(data.success);
           }
        });
 
    });

  
      
     
  </script>

  <script type="text/javascript">
      $('.one').click(function(){
        //alert('hi');

          $("#showOne").css("display","block") 

      });

  </script>
</x-admin-layout>