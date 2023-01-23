<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-end p-2 space-x-2">
                    <a href="{{ route('admin.all.agency.agreement') }}" class="px-4 py-2 bg-green-700 text-white hover:bg-green-500 rounded-md">All Agreement</a>
                    
        </div>
        
        <div class="p-2">
            <h1 class="display-6 text-center">Agreement  Details </h1>
        </div>

       <div class="row">
          
             

    <div class="row">
          <div class="p-4 pt-6 col-6">
             <div class="p-3 pt-6">
            <table class=" table table-bordered table-striped">
          
                <tbody>

                    <tr>
                        <th scope="row" class="mt-1 p-2">Agency Name</th>
                        <td>{{ $all_data->user->agency_name ?? ''}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $all_data->user->mobile_number ?? 'N/A'  }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Email</th>
                        <td>{{ $all_data->user->email ?? 'N/A'  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Agency Id</th>
                        <td>{{ $all_data->user->generated_id ?? 'N/A' }}</td>
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

      <div class="col-md-6">
        
   
     <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">SI. NO.</th>
                    <th scope="col">Signature</th>
                    <th scope="col">Status</th>
                    <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td> @if($all_data->signature_image)
                             <a href="{{ asset('uploads/signature') }}/{{ $all_data->signature_image }}" download><img src="{{ asset('uploads/signature') }}/{{ $all_data->signature_image }}" alt="img" style="width: 70px; height: 60px" ></a>
                           @else
                           @endif
                       </td>
                        <td>
                           {{($all_data->status==1)?'active':'deactive' }}
                        </td>
                        <td>
                          <a href="{{route('admin.agreement.approved',$all_data->id)}}" class="badge badge-success">Aproved Agreement</a>
                        </td>
                       
                    </tr>
                     
                    


                </tbody> 
               </table>
               </div>

    
  </div>

   
    
  </div>

  <script type="text/javascript">
    //  $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
   

    //      $("#btn-submit").click(function(e){
        

    //     e.preventDefault();
 
    //     var status = $("#status").val();
    //     var id =$('#id').val();
    //     var feedback   =$('#feedback').val();
    //     var file = $('#status_file').val();
    //     //var file_ext = status_file.substr(status_file.lastIndexOf('.')+1,status_file.length);
    //     var status_file =file.replace(/^.*[\\\/]/, '');
       
    //    //var formData = new FormData($(this));
        

    //      //alert(status_file);
 
    //     $.ajax({
    //        type:'POST',
    //        enctype: 'multipart/form-data',

    //        url:"{{url('admin/application/status/update/')}}/"+id,
    //        data:{status:status, application_id:id,feedback:feedback,status_file:status_file, "_token": "{{ csrf_token() }}"},
    //        success:function(data){
    //           //alert(data.success);
    //           $('#output').html('<div style="color:green">'+data.success+'</div>');
    //        }
    //     });
 
    // });

  
      
     
  </script>

  <script type="text/javascript">
      $('.one').click(function(){
        //alert('hi');

          $("#showOne").css("display","block") 

      });

  </script>

 
</x-admin-layout>