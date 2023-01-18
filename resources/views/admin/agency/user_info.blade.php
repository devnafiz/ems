<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7x1 mx-auto sm:px-8 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex justify-end p-2">
                    
                  
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg" style="font-size: 20px;">

                    
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col col-lg-10 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                              <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                  style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <h4> Id Number:{{$agency_data->generated_id}}</h4>
                                
                                  @if($agency_data->pro_image)
                                    <img src="{{asset('uploads/profile/'.$agency_data->pro_image)}}"
                                    alt="Avatar" class="img-responsive m-5" style="width: 80px;" />
                                  @else
                                     <img src="{{asset('uploads/profile/no-image.png')}}"
                                    alt="Avatar" class="img-responsive m-5" style="width: 80px;" />
                                  @endif
                                 
                                  <h5 style="float: left;text-transform:capitalize; " class="p-5">{{$agency_data->agency_name}}</h5>
                                 
                                 
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted">{{$agency_data->email ?? 'N/A'}}</p>
                                      </div>
                                      <div class="col-6 mb-3">
                                        <h6>Phone</h6>
                                        <p class="text-muted">{{$agency_data->mobile_number ?? 'N/A'}}</p>
                                      </div>
                                    </div>
                                    <h6>Projects</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                      <div class="col-6 mb-3">
                                        <h6>Status</h6>
                                        <p class="text-muted">{{($agency_data->status=='1')?'Active':'Deactive'}}</p>
                                      </div>
                                      <div class="col-6 mb-3">
                                        <h6>Total Application</h6>
                                        <p class="text-muted">{{$count_application}}</p>
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
