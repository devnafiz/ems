<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Edit Application Form
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.all-application.update',$edit_data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!--begin::Stepper-->
        <div class="stepper stepper-pills" id="kt_stepper_example_basic">
            <!--begin::Nav-->
            <div class="stepper-nav flex-center flex-wrap mb-10">
                <!--begin::Step 1-->
                <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->

                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                        <i class="stepper-check">&#10003;</i>
                        <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label">
                        <h3 class="stepper-title">
                            Step 1
                        </h3>

                        <div class="stepper-desc">
                            Personal info
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Step 1-->

                <!--begin::Step 2-->
                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->

                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                        <i class="stepper-check">&#10003;</i>
                        <span class="stepper-number">2</span>
                    </div>
                    <!--begin::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label">
                        <h3 class="stepper-title">
                            Step 2
                        </h3>

                        <div class="stepper-desc">
                            Address
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Step 2-->

                <!--begin::Step 3-->
                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                    <!--begin::Line-->
                    <div class="stepper-line w-40px"></div>
                    <!--end::Line-->

                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                        <i class="stepper-check">&#10003;</i>
                        <span class="stepper-number">3</span>
                    </div>
                    <!--begin::Icon-->

                    <!--begin::Label-->
                    <div class="stepper-label">
                        <h3 class="stepper-title">
                            Step 3
                        </h3>

                        <div class="stepper-desc">
                            Document
                        </div>
                    </div>
                    <!--end::Label-->
                </div>
                <!--end::Step 3-->

                
            </div>
            <!--end::Nav-->

            <!--begin::Form-->
            <form class="form w-lg-500px mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                <!--begin::Group-->
                <div class="mb-5">
                    <!--begin::Step 1-->
                    <div class="flex-column current" data-kt-stepper-element="content">
                        <div class="row">
                            <div class="col-md-6">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Nationality</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="nationality" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" {{($edit_data->nationality==$country->Name) ? 'selected':''}}>{{$country->Name}}</option>
                                        @endforeach
                                       
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Institute /Agency Referce Id :</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="reference_id"  value="{{$edit_data->reference_id}}" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport / IC Number:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="passport_number" value="{{$edit_data->passport_number}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Date of Birth (as in Passport):</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" name="date_of_birth" placeholder="" value="{{$edit_data->date_of_birth}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport Issue Date(as in Passport):</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" name="passport_issue_date" placeholder=""  value="{{$edit_data->passport_issue_date}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Obtain Single Entry Visa From:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="obtain_single_entry_visa" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Select</option>
                                         @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" {{($edit_data->obtain_single_entry_visa==$country->Name) ? 'selected':''}}>{{$country->Name}}</option>
                                        @endforeach
                                       
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant E-mail Id (You Must Put Valid And Varified Email Id)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_email_id" value="{{$edit_data->applicant_email_id}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Sex</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <div>
                                        <input type="radio" id="female" name="sex" value="Female" class="form-control "  {{($edit_data->sex=='Female')?'checked':''}}/>
                                        <label for="female" class="mr-2">Female</label>
                                        <input type="radio" id="male" name="sex" value="Male" class="form-control " {{($edit_data->sex=='Male')?'checked':''}}/>
                                        <label for="male" class="mr-2">Male</label>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Permanent Add:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" rows="2" name="applicant_permanent_add">
                                        {{$edit_data->applicant_permanent_add}}
                                    </textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Postal Code:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_postal_code" value="{{$edit_data->applicant_postal_code ?? 'N/A'}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Country</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="country" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                         @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" {{($edit_data->country==$country->Name) ? 'selected':''}}>{{$country->Name}}</option>
                                        @endforeach
                                       
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Resident Number</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="resident_number" value="{{$edit_data->resident_number ?? 'N/A'}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                            </div>

                        <!----.......................---->

                            <div class="col-md-6">
                                
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Select Programme</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select name="programme" id="programme" class="form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Programme</option>
                                        @foreach($programmes as $programme) 
                                            <option value="{{ $programme->programme_id }}" {{($edit_data->programme)? 'selected':'' }}>{{ $programme->programme_name }}  </option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Select Subject</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select name="subject" id="subject" class="form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                             @foreach($subject as $sub)
                                 <option value="{{ $sub->subject_id }}" {{ $edit_data->subject == $sub->subject_id ? 'selected': '' }} >{{ $sub->subject_name }}</option>  
                                            @endforeach
                                        
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Name (as in Passport)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_name" value="{{$edit_data->applicant_name ?? 'N/A'}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Passport Issued Place(as in Passport):</label>
                                      
                                    <input type="text" class="form-control form-control-solid" name="passport_issued_place"  value="{{$edit_data->passport_issued_place ?? 'N/A'}}" />
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport Expiry Date(as in Passport):</label>
                                   
                                    <input type="date" class="form-control form-control-solid" name="passport_expiry_date" value="{{$edit_data->passport_expiry_date}}" />
                                  
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Mobile Number (You Must Put Valid And Varified Mobile Number)</label>
                                        
                                    <input type="text" class="form-control form-control-solid" name="applicant_mobile_number" value="{{$edit_data->applicant_mobile_number ?? 'N/A'}}" />
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                  
                                    <label class="form-label">Staff/Agent E-mail Id (You Must Put Valid And Varified Email Id)</label>
                                     
                                    <input type="text" class="form-control form-control-solid" name="agent_email_id" value="{{$edit_data->agent_email_id ?? 'N/A'}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Marital Status</label>
                                    
                                    <div>
                                        <input type="radio" id="single" name="marital" value="Single" class="form-control" {{($edit_data->marital=='Single') ? 'checked' :''}}/>
                                        <label for="single" class="mr-2">Single</label>

                                        <input type="radio" id="married" name="marital" value="Married" class="form-control" {{($edit_data->marital=='Married') ? 'checked' :''}}/>
                                        <label for="married" class="mr-2">Married</label>

                                        <input type="radio" id="devorce" name="marital" value="Devorce" class="form-control" {{($edit_data->marital=='Devorce') ? 'checked' :''}}/>
                                        <label for="devorce" class="mr-2">Devorce</label>

                                        <input type="radio" id="never_married" name="marital" value="Never Married" class="form-control" {{($edit_data->marital=='Never Married') ? 'checked' :''}}/>
                                        <label for="never_married" class="mr-2">Never Married</label>
                                    </div>
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Applicant City:</label>
                                    <input type="text" class="form-control form-control-solid" name="applicant_city" value="{{$edit_data->applicant_city ?? 'N/A'}}" />
                                   
                                </div>
                                <!--end::Input group-->
                                
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Applicant State:</label>
                                     
                                    <input type="text" class="form-control form-control-solid" name="applicant_state" value="{{$edit_data->applicant_state ?? 'N/A'}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Mobile Number:</label>
                                    <input type="text" class="form-control form-control-solid" name="mobile_number" value="{{$edit_data->mobile_number ?? 'N/A'}}" />
                                  
                                </div>
                                <!--end::Input group-->

                            </div>
                        </div>
                        
                    </div>
                    <!--End::Step 1-->



                    <!--begin::Step 2-->
                    <div class="flex-column" data-kt-stepper-element="content">
                        <div class="row">
                            <div class="col-md-6">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <input type="checkbox" id="as_above" name="as_above" {{($edit_data->as_above)?'checked':''}}>
                                    <label class="form-label form-control-solid" for="as_above">Check If (Same as Permanent Address)</label>
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Correspondence Address:</label>
                                    <textarea class="form-control form-control-solid" rows="2" name="correspondence_address">
                                        {{$edit_data->correspondence_address}}
                                    </textarea>
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Postal Code:</label>
                                    <input type="text" class="form-control form-control-solid" name="postal_code" value="{{$edit_data->postal_code}}" />
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                  
                                    <label class="form-label">Country</label>
                                    <select id="country2" name="country_2" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                         @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" {{($edit_data->country_2==$country->Name)? 'selected' : ''}}>{{$country->Name}}</option>
                                        @endforeach
                                       
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Resident Number:</label>
                                    <input type="text" class="form-control form-control-solid" name="resident_number_2" value="{{$edit_data->resident_number_2}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Father's Tel No:</label>
                                     <input type="text" class="form-control form-control-solid" name="father_tel_no" value="{{$edit_data->father_tel_no ?? 'N/A'}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Mother's Name:</label>
                                    <input type="text" class="form-control form-control-solid" name="mother_name" value="{{$edit_data->mother_name ?? 'N/A'}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Mother's Occupation:</label>
                                    <input type="text" class="form-control form-control-solid" name="mother_occupation" value="{{$edit_data->mother_occupation ?? 'N/A'}}" />
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Guardian Tel No:</label>
                                  
                                    <input type="text" class="form-control form-control-solid" name="guardian_tel_no" value="{{$edit_data->guardian_tel_no ?? 'N/A'}}" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Highest Qualification</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="highest_qualification" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="Ordinary Level (O Level)" {{($edit_data->highest_qualification=='Ordinary Level (O Level)')? 'selected':'' }}>Ordinary Level (O Level)</option>
                                        <option value="Advanced Level (A Level)" {{($edit_data->highest_qualification=='Advanced Level (A Level)')? 'selected':'' }}>Advanced Level (A Level)</option>
                                        <option value="Undergraduate" {{($edit_data->highest_qualification=='Undergraduate')? 'selected':'' }}>Undergraduate</option>
                                        <option value="Postgraduate" {{($edit_data->highest_qualification=='Postgraduate')? 'selected':'' }}>Postgraduate</option>
                                        <option value="PhD"  {{($edit_data->highest_qualification=='PhD')? 'selected':'' }}>PhD</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Year Of Passing:</label>
                                   
                                    <input type="text" class="form-control form-control-solid" name="year_of_passing" value="{{$edit_data->year_of_passing ?? 'N/A'}}" />
                                  
                                </div>
                                <!--end::Input group-->

                            </div>

                        <!----.......................---->

                            <div class="col-md-6">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label"></label>
                                 
                                </div>
                                <label class="form-label"></label>
                              

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">City:</label>
                                    
                                    <input type="text" class="form-control form-control-solid" name="city" value="{{$edit_data->city ?? ''}}" />
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">State:</label>
                                  
                                    <input type="text" class="form-control form-control-solid" name="state" {{$edit_data->state ?? ''}} />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Mobile Number:</label>
                                   
                                    <input type="text" class="form-control form-control-solid" name="mobile_number_2" value="{{$edit_data->mobile_number_2 ?? ''}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Father's Name</label>
                                    <input type="text" class="form-control form-control-solid" name="father_name" value="{{$edit_data->father_name ?? ''}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                  
                                    <label class="form-label">Father's Occupation</label>
                                    <input type="text" class="form-control form-control-solid" name="father_occupation" value="{{$edit_data->father_occupation ?? ''}}" />
                                    
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Mother Tel No:</label>
                                    <div>
                                     <input type="text" class="form-control form-control-solid" name="mother_tel_no" value="{{$edit_data->mother_tel_no ?? ''}}" />
                                    </div>
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                  
                                    <label class="form-label">Gurdian's Name:</label>
                                    <input type="text" class="form-control form-control-solid" name="gurdian_name" value="{{$edit_data->gurdian_name ?? ''}}" />
                                  
                                </div>
                                <!--end::Input group-->
                                
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Gurdian's Occupation:</label>
                                    <input type="text" class="form-control form-control-solid" name="gurdian_occupation" value="{{$edit_data->gurdian_occupation ?? ''}}" />
                                   
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label"></label>
                                    <!--end::Label-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label"></label>
                                    <!--end::Label-->
                                </div>
                                <label class="form-label"></label>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Overall Grade:</label>
                                  
                                    <input type="text" class="form-control form-control-solid" name="grade"  value="{{$edit_data->grade ?? 'N/A'}}" />
                                   
                                </div>
                                <!--end::Input group-->

                            </div>
                        </div>
                    </div>
                    <!--End::Step 2-->




                    <!--begin::Step 3 -->
                    <div class="flex-column" data-kt-stepper-element="content">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">&#9967; Please Re Confirm The Following as in passport:</label>
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Applicant Name (as in Passport)</label>
                                   
                                    <input type="text" class="form-control form-control-solid" name="applicant_name_2" placeholder="Name as in Passport" value="{{$edit_data->applicant_name_2 ?? ''}}" />
                                  
                                    <label class="form-label">Ex: Surmane: SESAY. Given Name: RICHARD (MRZ Format)</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                  
                                    <label class="form-label">Are you currently studying in any Malaysian University/College ?</label>
                                   
                                    <div>
                                        <input type="radio" id="no" name="study" value="No" class="form-control" {{($edit_data->study=='No') ? 'checked' : ''}}/>
                                        <label for="no" class="mr-2" >No</label>
                                        <input type="radio" id="yes" name="study" value="Yes" class="form-control " {{($edit_data->study=='No') ? 'checked' : ''}}/>
                                        <label for="yes" class="mr-2">Yes</label>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-md-6">
                            <label class="form-label"></label>
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                   
                                    <label class="form-label">Passport / IC Number:</label>
                                    
                                    <input type="text" class="form-control form-control-solid" name="passport_number_2" {{$edit_data->passport_number_2 ?? ''}}/>
                                   
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    
                                    <label class="form-label">Do you have Current Malaysian Visa Pass Active ?</label>
                                   
                                    <input type="radio" id="no" name="visa_pass" value="No" class="form-control " {{($edit_data->visa_pass=='No') ? 'checked' : ''}}/>
                                    <label for="no" class="mr-2">No</label>
                                    <input type="radio" id="yes" name="visa_pass" value="Yes" class="form-control" {{($edit_data->visa_pass=='Yes') ? 'checked' : ''}}/>
                                    <label for="yes" class="mr-2">Yes</label>
                                    
                                </div>
                                <!--end::Input group-->
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
                                            <input type="text" name="health_declaration" class="form-control form-control-solid" value="Health Declaration Form" readonly />
                                        </td>
                                        <td>
                                            <input type="file" name="health_declaration_file" class="form-control form-control-solid" />
                                            <div>
                                                @if($edit_data->health_declaration_file)
                                                <img src="{{asset('uploads/health/'.$edit_data->health_declaration_file)}}" width="50" height="50">
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row" class="text-center">2</th>
                                        <td>Page Link</td>
                                        <td>
                                            <input type="text" name="passport_scanned" class="form-control form-control-solid" value="Passport/NRIC Scanned [All Pages (zip)]" />
                                        </td>
                                        <td>
                                            <input type="file" name="passport_scanned_file" class="form-control form-control-solid" />
                                            <div>
                                                @if($edit_data->passport_scanned_file)
                                                <img src="{{asset('uploads/passport/'.$edit_data->passport_scanned_file)}}" width="50" height="50">
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center">3</th>
                                        <td>Page Link</td>
                                        <td>
                                            <input type="text" name="photo" class="form-control form-control-solid" value="Photo" />
                                           
                                        </td>
                                        <td>
                                            <input type="file" name="photo_file" class="form-control form-control-solid" />
                                            <div>
                                                @if($edit_data->photo_file)
                                                <img src="{{asset('uploads/photo/'.$edit_data->photo_file)}}" width="50" height="50">
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center">4</th>
                                        <td>Page Link</td>
                                        <td>
                                            <input type="text" name="academic_certificate_1" class="form-control form-control-solid" value="Academic Certificate 1" />
                                        </td>
                                        <td>
                                            <input type="file" name="academic_certificate_file_1" class="form-control form-control-solid" />
                                             <div>
                                                @if($edit_data->academic_certificate_file_1)
                                                <img src="{{asset('uploads/certificates/'.$edit_data->academic_certificate_file_1)}}" width="50" height="50">
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="text-center">5</th>
                                        <td>Page Link</td>
                                        <td>
                                            <input type="text" name="academic_certificate_2" class="form-control form-control-solid" value="Academic Certificate 2" />
                                        </td>
                                        <td>
                                            <input type="file" name="academic_certificate_file_2" class="form-control form-control-solid" />
                                            <div>
                                                @if($edit_data->academic_certificate_file_2)
                                                <img src="{{asset('uploads/certificates/'.$edit_data->academic_certificate_file_2)}}" width="50" height="50">
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--End::Step 3-->

                    
                </div>
                <!--end::Group-->

                <!--begin::Actions-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="me-2">
                        <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                            Back
                        </button>
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Wrapper-->
                    <div>
                        <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>

                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                            Continue
                        </button>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Stepper-->          

      </form>

      </div>
  </div>


</x-admin-layout>
