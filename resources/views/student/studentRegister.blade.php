<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Student Application Form
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('student.registration.store') }}" enctype="multipart/form-data">
        @csrf
        
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
                                    <select id="country" name="nationality" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" >{{$country->Name}}</option>
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
                                    <input type="text" class="form-control form-control-solid" name="reference_id" />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport / IC Number:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="passport_number" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Date of Birth (as in Passport):</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" name="date_of_birth" placeholder="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport Issue Date(as in Passport):</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" name="passport_issue_date" placeholder="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Obtain Single Entry Visa From:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="obtain_single_entry_visa" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" >{{$country->Name}}</option>
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
                                    <input type="text" class="form-control form-control-solid" name="applicant_email_id" placeholder="Please Enter student By Mail-Id" />
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
                                        <input type="radio" id="female" name="sex" value="Female" class="form-control " checked="checked"/>
                                        <label for="female" class="mr-2">Female</label>
                                        <input type="radio" id="male" name="sex" value="Male" class="form-control " />
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
                                    <textarea class="form-control form-control-solid" rows="2" name="applicant_permanent_add"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Postal Code:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_postal_code" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Country</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="country" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                         @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" >{{$country->Name}}</option>
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
                                    <input type="text" class="form-control form-control-solid" name="resident_number" placeholder=""/>
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
                                    <select name="programme" id="programme" class="form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Programme</option>
                                        @foreach($programmes as $programme) 
                                            <option value="{{ $programme->programme_id }}">{{ $programme->programme_name }}  </option>
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
                                    <select name="subject" id="subject" class="form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        
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
                                    <input type="text" class="form-control form-control-solid" name="applicant_name" placeholder="Name as in Passport"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport Issued Place(as in Passport):</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="passport_issued_place" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Passport Expiry Date(as in Passport):</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="date" class="form-control form-control-solid" name="passport_expiry_date" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Mobile Number (You Must Put Valid And Varified Mobile Number)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_mobile_number" placeholder="Valid Mobile Number"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Staff/Agent E-mail Id (You Must Put Valid And Varified Email Id)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="agent_email_id" placeholder="Please Enter Applied By Mail-Id"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Marital Status</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <div>
                                        <input type="radio" id="single" name="marital" value="Single" class="form-control" checked="checked"/>
                                        <label for="single" class="mr-2">Single</label>

                                        <input type="radio" id="married" name="marital" value="Married" class="form-control" />
                                        <label for="married" class="mr-2">Married</label>

                                        <input type="radio" id="devorce" name="marital" value="Devorce" class="form-control" />
                                        <label for="devorce" class="mr-2">Devorce</label>

                                        <input type="radio" id="never_married" name="marital" value="Never Married" class="form-control" />
                                        <label for="never_married" class="mr-2">Never Married</label>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant City:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_city" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant State:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_state" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Mobile Number:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="mobile_number" placeholder=""/>
                                    <!--end::Input-->
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
                                    <!--begin::Input-->
                                    <input type="checkbox" id="as_above" name="as_above" >
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-label form-control-solid" for="as_above">Check If (Same as Permanent Address)</label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Correspondence Address:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" rows="2" name="correspondence_address"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Postal Code:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="postal_code" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Country</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country2" name="country_2" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                         @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" >{{$country->Name}}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Resident Number:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="resident_number_2" placeholder="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Father's Tel No:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="father_tel_no" placeholder="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Mother's Name:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="mother_name" placeholder="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Mother's Occupation:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="mother_occupation" placeholder="Please Enter student By Mail-Id" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Guardian Tel No:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="guardian_tel_no"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Highest Qualification</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select id="country" name="highest_qualification" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="Ordinary Level (O Level)">Ordinary Level (O Level)</option>
                                        <option value="Advanced Level (A Level)">Advanced Level (A Level)</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Postgraduate">Postgraduate</option>
                                        <option value="PhD">PhD</option>
                                        <option value="Master's">Master's</option>
                                        <option value="Bachelor Degree">Bachelor Degree</option>
                                        <option value="HSC">HSC</option>
                                        <option value="SSC">SSC</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Year Of Passing:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="year_of_passing" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                            </div>

                        <!----.......................---->

                            <div class="col-md-6">
                                <!--begin::Input group-->
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
                                    <label class="form-label">City:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="city" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">State:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="state" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Mobile Number:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="mobile_number_2" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Father's Name</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="father_name" placeholder="Valid Mobile Number"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Father's Occupation</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="father_occupation" placeholder="Please Enter Applied By Mail-Id"/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Mother Tel No:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <div>
                                    <input type="text" class="form-control form-control-solid" name="mother_tel_no" placeholder=""/>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Gurdian's Name:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="gurdian_name" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Gurdian's Occupation:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="gurdian_occupation" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
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
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="grade" placeholder=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                            </div>
                        </div>
                    </div>
                    <!--End::Step 2-->




                    <!--begin::Step 3-->
                    <div class="flex-column" data-kt-stepper-element="content">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">&#9967; Please Re Confirm The Following as in passport:</label>
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Applicant Name (as in Passport)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="applicant_name_2" placeholder="Name as in Passport"/>
                                    <!--end::Input-->
                                    <label class="form-label">Ex: Surmane: SESAY. Given Name: RICHARD (MRZ Format)</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Are you currently studying in any Malaysian University/College ?</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <div>
                                        <input type="radio" id="no" name="study" value="No" class="form-control " checked="checked"/>
                                        <label for="no" class="mr-2" >No</label>
                                        <input type="radio" id="yes" name="study" value="Yes" class="form-control " />
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
                                    <!--begin::Label-->
                                    <label class="form-label">Passport / IC Number:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="passport_number_2" placeholder="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Do you have Current Malaysian Visa Pass Active ?</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="radio" id="no" name="visa_pass" value="No" class="form-control " checked="checked"/>
                                    <label for="no" class="mr-2">No</label>
                                    <input type="radio" id="yes" name="visa_pass" value="Yes" class="form-control " />
                                    <label for="yes" class="mr-2">Yes</label>
                                    <!--end::Input-->
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
                                            <input type="text" name="health_declaration" class="form-control form-control-solid" value="Health Declaration Form" />
                                        </td>
                                        <td>
                                            <input type="file" name="health_declaration_file" class="form-control form-control-solid" />
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
