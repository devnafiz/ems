<x-admin-layout>
    <div class="container px-6 mx-auto grid">
       
        @role('student')
         <h3
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="text-decoration: underline;
    text-transform: uppercase;"
        >
          Welcome, <span >{{Auth::user()->student_name}}</span>
        </h3> 
          <div class="container rounded bg-white mt-5">
              <div class="row">
                  <div class="col-md-4 border-right">
                      <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                           @if($user_data->pro_image)
                                    <img src="{{asset('uploads/profile/'.$user_data->pro_image)}}"
                                    alt="Avatar" class=" rounded-circle img-responsive m-5" style="width: 80px;" />
                          @else
                                 <img class="rounded-circle mt-5" src="{{asset('assets/img/101.png')}}" width="90">
                          @endif
                     
                        <span class="font-weight-bold">{{$user_data->student_name ?? ''}}</span><span class="text-black-50">{{$user_data->email ?? ''}}</span><span style="color:green;">Student ID : {{$user_data->generated_id ?? ''}}</span>
                         @if(!empty($passport_number))
                            <span style="color:green;">Passport Number : {{$passport_number->passport_number ?? ''}}</span>
                         @endif
                      </div>
                     
                  </div>
                  <div class="col-md-8">
                      <div class="p-3 py-5">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                              <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                 <!--  <h6>Back to home</h6> -->
                              </div>
                             <!--  <h6 class="text-right">Edit Profile</h6> -->
                          </div>
                          <div class="row mt-2">
                              <div class="col-md-12"><input type="text" class="form-control" placeholder="first name" value="{{$user_data->student_name ?? ''}}" readonly></div>
                             
                          </div>
                          <div class="row mt-3">
                              <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="{{$user_data->email ?? ''}}" readonly></div>
                              <div class="col-md-6"><input type="text" class="form-control" value="{{$user_data->mobile_number ?? ''}}" placeholder="Phone number" readonly></div>
                          </div>
                         <!--  <div class="row mt-3">
                              <div class="col-md-6"><input type="text" class="form-control" placeholder="address" value="{{$user_data->profile->address ?? ''}}"></div>
                              <div class="col-md-6"><input type="text" class="form-control" value="{{$user_data->profile->country ?? ''}}" placeholder="Country"></div>
                          </div> -->
                          
                         
                      </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                     <div class="p-3 pt-6">
                 <p>Application Status :&nbsp<span class="badge badge-info px-4">{{$user_data->studentregister->appstatus->name ?? 'N/A'}}</span></p><br/>

               


              <div class="bg-white rounded-lg p-5 shadow">
                <h2 class="h6 font-weight-bold text-center mb-4">Application Status Progress</h2>

                <!-- Progress bar 3 -->
                <div class="progress mx-auto" data-value='{{$user_data->studentregister->appstatus->percentage ?? "0"}}'>
                  <span class="progress-left">
                                <span class="progress-bar border-success"></span>
                  </span>
                  <span class="progress-right">
                                <span class="progress-bar border-success"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">{{$user_data->studentregister->appstatus->percentage ?? '0'}}<sup class="small">%</sup></div>
                  </div>
                </div>
                <!-- END -->

            </div>

                 
            
              
          </div>
                  
                </div>
                
              </div>
          </div>



        @endrole 
        @role('agency')

        <?php

         $agreement=App\Models\Agreement::where('user_id',Auth::user()->id)->first();

        ?>

         <h2></h2>    
         <h3
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="text-decoration: underline;
    text-transform: uppercase;"
        >
          Welcome, <span >{{Auth::user()->agency_name}}</span>
        </h3>
         @if($agreement && $agreement->status==1)
        <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-red-500">Agency ID : {{Auth::user()->generated_id ?? ''}}</h4>
        @else
        <h4 class="my-6 text-2xl font-semibold text-gray-700 dark:text-red-500">Agency ID :</h4>
        @endif

        <div class="grid gap-6 mb-8 md:grid-cols-3 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-5  bg-orange-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Students
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                   {{$ag_students}}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Application processing
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                   {{($ag_progress)?? '0'}}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-red-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Complete applications
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                   {{($ag_progress_com) ?? '0'}}
                  </p>
                </div>
              </div>
              <!-- Card -->

             @if(empty($agreement))
              <div class="flex items-center p-4 bg-red-500 rounded-lg">
                <div>
                  <a href="{{route('agency.agreement.show',Auth::user()->id)}}">
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                     Click here
                  </p>

                   <button><h3 style="font-size: 20px;">Agreement </h3></button> </a>
                </div>
                
              </div>
              @else
              <div class="flex items-center p-4  rounded-lg dark:text-blue-100 dark:bg-blue-500">
                <table class="table table-bordered text-center">
                  <tr  style="border: 2px solid #000 !important;">
                    <td><strong>Agreement 
                      @if($agreement->status==1)
                      <a href="{{route('agency.agreement.confirm',Auth::user()->id)}}" class="badge badge-success">download</a>
                      @else
                        <a href="#" class="badge badge-success"> download </a>
                      @endif
                    </strong></td>
                    <td>@if($agreement->status==1) <span class="badge badge-success">Active</span> @else <span class="badge badge-danger">pending..</span>@endif </td>
                    <td>
                       @if($agreement->status==1)
                      <a href="{{route('agency.agreement.certificate',Auth::user()->id)}}" class="badge badge-success">certificate download </a>
                      @else

                         <a href="#" class="badge badge-success">certificate download </a>
                      @endif  
                    </td>
                  </tr>
                </table>

              </div> 

              @endif
              
            </div>


        @endrole
        @role('admin')  

              <h3
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="text-decoration: underline;
    text-transform: uppercase;"
        >
          Welcome, <span >{{Auth::user()->name}}</span>
        </h3>    

                   <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-3 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-5  bg-orange-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Students
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($students)
                  <a href="{{route('admin.student.index')}}">{{$students}}</a>
                  @else
                   {{$students}}
                  @endif
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Application processing
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($progress)
                    <a href="{{route('admin.application.progress')}}"> {{($progress)?? '0'}}</a>
                  @else
                    {{($progress)?? '0'}}
                  @endif  
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-red-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Complete applications
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($progress_com)
                   <a href="{{route('admin.application.completed')}}"> {{($progress_com)?? '0'}}</a>
                  @else
                    {{($progress_com)?? '0'}}
                   @endif 
                  </p>
                </div>
              </div>
              <!-- Card -->
              
            </div>

            <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-5 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Agency
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($agencys)
                   <a href="{{route('admin.all.agency')}}">{{$agencys}}</a>
                  @else
                  {{$agencys}}
                  @endif 
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Application processing
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($admin_progress)
                  <a href="{{route('admin.application.agency.progress')}}"> {{($admin_progress) ?? '0'}}</a>
                  @else
                    {{($admin_progress) ?? '0'}}
                  @endif
                   
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Complete applications
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($admin_agency_com)
                  <a href="{{route('admin.application.agency.completed')}}">{{($admin_agency_com) ?? '0'}}</a>
                  @else

                    {{($admin_agency_com) ?? '0'}}

                   @endif 
                  </p>
                </div>
              </div>
             
            </div>


           
         <!-- <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
             
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Institute
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($institutes)
                   <a href=""> {{$institutes}}</a>
                  @else
                    {{$institutes}}
                   @endif 
                  </p>
                </div>
              </div>
              
              <div
                class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Application processing
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($admin_In_progress)
                  <a href="">{{($admin_In_progress) ?? '0'}}</a>
                  @else
                   {{($admin_In_progress) ?? '0'}}

                   @endif
                  </p>
                </div>
              </div>
              
              <div
                class="flex items-center p-5 bg-red-100 rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div
                  class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
                >
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                    ></path>
                  </svg>
                </div>
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    New applications
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                  @if($admin_IN_com)
                   <a href="">{{($admin_IN_com) ?? '0'}}</a>
                  @else
                    {{($admin_IN_com) ?? '0'}}
                  @endif  
                  </p>
                </div>
              </div>
            </div>-->
              <!-- Card -->
              @endrole
             
            </div>
    </div>

  
<script type="text/javascript">
      $(function() {

  $(".progress").each(function() {

    var value = $(this).attr('data-value');
    //alert(value);
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
