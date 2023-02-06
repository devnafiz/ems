<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7x1 mx-auto sm:px-8 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex justify-end p-2">
                     <a href="{{ route('admin.student.index') }}" class="px-4 py-2 bg-green-700 text-white hover:bg-green-500 rounded-md">All Student</a>
                  
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg" style="font-size: 20px;">

                    
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col col-lg-8 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                              <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                  style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <!-- <a href="{{route('admin.student.edit',$all_data->id)}}" class="btn btn-primary my-2"><i class="far fa-edit ">Edit profile</i></a>     -->
                                
                                  @if($all_data->pro_image)
                                    <img src="{{asset('uploads/profile/'.$all_data->pro_image)}}"
                                    alt="Avatar" class="img-responsive m-5" style="width: 80px;" />
                                  @else
                                     <img src="{{asset('uploads/profile/no-image.png')}}"
                                    alt="Avatar" class="img-responsive m-5" style="width: 80px;" />
                                  @endif
                                 
                                  <h5 style="float: left;text-transform:capitalize; " class="p-5">{{$all_data->student_name}}</h5>
                                 
                                 
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body p-4">
                                     <div class="row pt-1">
                                      <div class="col-12 mb-3">
                                        <h6 class="text-red-400">Student ID :{{$all_data->generated_id ?? 'N/A'}}</h6>
                                        
                                      </div>
                                      
                                    </div>
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">{{$all_data->email ?? 'N/A'}}</p>
                                      </div>
                                      <div class="col-6 mb-3">
                                        <h6>Phone</h6>
                                        <p class="text-muted">{{$all_data->mobile_number ?? 'N/A'}}</p>
                                      </div>
                                    </div>
                                    <h6>Projects</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                        <h6>Status</h6>
                                        <p class="text-muted">{{($all_data->status=='1')?'Active':'Deactive'}}</p>
                                      </div>
                                      <div class="col-6 mb-3">
                                        <h6>Country</h6>
                                        <p class="text-muted">{{$all_data->profile->country ?? 'N/A'}}</p>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
  
                   
                </div>


                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
