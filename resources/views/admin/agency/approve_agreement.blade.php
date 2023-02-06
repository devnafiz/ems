<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex p-2">
                   <!--  <a href="{{ route('admin.roles.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md"></a> -->
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                    <div class="space-y-8 divide-y divide-gray-200  mt-10 p-2">
                        <form method="POST" action="{{ route('admin.agreement.approved.update',$all_data->id) }}">
                            @csrf
                            
                            <input type="hidden" name="certificate" value="1">
                            <div class="sm:col-span-12">
                                <div class="outer-border">
                                    <div class="inner-dotted-border">
                                           <span class="certification">Certificate of Agreement</span>
                                           <br><br>
                                           <span class="certify"><i>This is to certify that</i></span>
                                           <br><br>
                                           <span class="name"><b>{{$all_data->user->agency_name ?? ''}}</b></span><br/><br/>
                                           <span class="certify"><i>has successfully completed the certification</i></span> <br/><br/>
                                           <span class="fs-30">Agency Owner</span> <br/><br/>
                                          <!--  <span class="fs-20">with score of <b>A+</b></span> <br/><br/> -->
                                         
                                         
                                         <!--  <div class="row">
                                            <div class="pm-certificate-footer">
                                                <div class="md:col-span-4 pm-certified col-xs-4 text-center">
                                                  <span class="pm-credits-text block sans">Buffalo City School District</span>
                                                  <span class="pm-empty-space block underline"></span>
                                                  <span class="bold block">Crystal Benton Instructional Specialist II, Staff Development</span>
                                                </div>
                                                <div class="md:col-span-4">
                                                
                                                </div>
                                                <div class="md:col-span-4 pm-certified col-xs-4 text-center">
                                                  <span class="pm-credits-text block sans">Date Completed</span>
                                                  <span class="pm-empty-space block underline"></span>
                                                  <span class="bold block">DOB: </span>
                                                 
                                                </div>
                                            </div>
                                          </div> -->
        
                                   
                                    </div>
                            </div>
                            <div class="sm:col-span-6">
                                 <label for="name" class="block text-sm font-medium text-gray-700"> status </label>
                                  <div class="mt-1">
                                    <select class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" name="status">
                                        <option value="">select status</option>
                                        <option value="1" {{($all_data->status==1) ? 'selected' :''}}>active</option>
                                        <option value="0" {{($all_data->status==0) ? 'selected' :''}}>deactive</option>
                                    </select>
                                  </div>  
                                
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Approved</button>
                            </div>
                        </form>
                    </div>

                </div>


                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
.outer-border{
    width:800px; height:650px; padding:20px; text-align:center; border: 10px solid #00b2ff;    margin-left: 21%;
}

.inner-dotted-border{
    width:750px; height:600px; padding:20px; text-align:center; border: 1px solid #673AB7;border-style: dotted;
}

.certification{
    font-size:50px; font-weight:bold;    color: #663ab7;
}

.certify{
    font-size:25px;
}

.name{
    font-size:30px;    color: green;
}

.fs-30{
    font-size:30px;
}

.fs-20{
    font-size:20px;
}


    </style>
</x-admin-layout>
