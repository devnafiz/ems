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
                                  <div class="row">
                                     <div class="col-md-12">
                                        <div class="border-pattern">
                                         <div class="content">
                                          <div class="inner-content">
                                             <div style="" class="text-center">
                                                @if($setting)
                                                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/uploads/logo/'.$setting->certificate_logo))) }}" width="100" height="100" class="mx-auto d-block">
                                                @else
                                                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/logo-for-certificate.png'))) }}" width="100" height="100" class="mx-auto d-block">
                                                @endif
                                               
                                               </div> 
                                              <h1>Unice Education Malaysia</h1><br/>

                                              <h2 class="crt_title"><i>Certificate OF Appointment</i></h2>
                                              <h3>{{$items->user->agency_name}}</h3><br/>

                                                <p>Has</p>
                                                <p>been appointed as an authorized</p>
                                                <p>representative for a period of 1 year</p>
                                                <p>From</p><br/>

                                                <p style="font-size:13px;">{{date('jS \o\f F Y', strtotime($items->updated_at))}} to {{date('jS \o\f F Y', strtotime('+ 364 days',strtotime($items->updated_at)))}} </p>
                                               
                                               <div style="">
                                                 @if($setting)
                                                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/uploads/logo/'.$setting->signature))) }}" width="200" height="70" class="mx-auto d-block">

                                                 @else
                                                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/0099_ceo.png'))) }}" width="200" height="70" class="mx-auto d-block">
                                                 @endif
                                                <p>.......................................................................</p>
                                              </div>
                                             
                                              <p style="font-size:13px;"> Engr. Md Omar Faruk </p>
                                              <p style="font-size:13px;">CEO</p>
                                              <p style="font-size:11px;">Issue date: {{date('jS \o\f F Y', strtotime($items->updated_at))}}</p>
                                              <p style="font-size:11px;float:left;"> SL no: {{$items->generated_id}}</p>
                                              <div style="float: right;left: 100px;position: relative;">
                                                @if($items->signature_image)
                                                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/Certified-Stamp-PNG-Clipart-Background.png'))) }}" width="150" height="150">
                                                @endif 
                                               
                                              </div>

                                              <div class="badge">
                                              </div>
                                          </div>
                                      </div>
                                      
                                   </div>
                                  </div>
                                   

                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                     <label for="name" class="block text-sm font-medium text-gray-700"> status </label>
                                      <div class="mt-1">
                                        <select class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" name="status">
                                            <option value="">select status</option>
                                            <option value="1" {{($all_data->status==1) ? 'selected' :''}}>active</option>
                                            <option value="0" {{($all_data->status==0) ? 'selected' :''}}>deactive</option>
                                        </select>
                                      </div>  
                                    
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
    

 <style>

    .border-pattern{
  /*  position:absolute;*/
    position: relative;
    left:4mm;
    top:-6mm;
    height:280mm;
    width:289mm;
    /*border:1mm solid  #00b2ff;*/
   
    background-color: #d6d6e4;
 
}

.content{
    position:absolute;
    left:10mm;
    top:10mm;
    height:260mm;
    width:271mm;
   /* border:1mm solid # #00b2ff;*/
    background:white;
}

.inner-content{
  border: 1mm solid #00b2ff;
    margin: 6mm;
    padding: 10mm;
    height: 234mm;
    text-align: center;
}

h1{
    text-transform:uppercase;
    font-size:24pt;
    margin-bottom:4px;
}

h2{
    font-size:20pt;
    margin-top:0;
    padding-bottom:1mm;
    display:inline-block;
    border-bottom:1mm solid #991B1B;
}

h2::after{
    content:"";
    display:block;
    padding-bottom:1mm;
    
}

h3{
    font-size:20pt;
    margin-bottom:0;
    margin-top:10mm;
}

p{
    font-size:16pt;
}
.crt_title {
 
  font-family: "Satisfy", cursive;
  font-size: 20px;
  letter-spacing: 1px;
  color: #0060a9;
  text-transform:uppercase;
}

.badge{
    width:40mm;
    height:40mm;
    position:absolute;
    right:10mm;
    bottom:10mm;
  
}
  </style>
</x-admin-layout>
