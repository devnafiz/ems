<x-admin-layout>
   
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                <div class="flex justify-end p-2">
                  
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-4">
                                    SL
                                </th>

                                <th scope="col" class="py-3 px-4">
                                    Name
                                </th>

                                <th scope="col" class="py-3 px-4">
                                    Reference Id
                                </th>

                                 <th scope="col" class="py-3 px-4">
                                    Nationality
                                </th>
                                 <th scope="col" class="py-3 px-4">
                                    Passport No
                                </th>
                                 <th scope="col" class="py-3 px-2">
                                    Application Status
                                </th>
                                <th scope="col" class="py-3 px-4">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $k=>$ad)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="py-4 px-6 font-medium">{{$k+1}}</td>
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $ad['user']->student_name }}
                                    </th>
                                     <td class="">{{$ad->reference_id ?? 'N/A'}}</td>
                                     <td class="">{{$ad->nationality}}</td>
                                   
                                    <td class="">{{$ad->passport_number}}</td>
                                    <td class=""><span class="badge badge-info">{{$ad->appstatus->name ?? 'N/A'}}</span></td>
                                    <td class="py-4 px-6">
                                        <div class="flex space-x-2">
                                           <a href="{{route('admin.all-application.edit',$ad->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                            <a href="{{route('admin.all-application.show',$ad->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">details</a>
                                        
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination">
                        {{$applications->links()}}
                        
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>



<!-- Modal -->
<!-- <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <form method="POST" action="#">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel" >Application Progress</h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">

        Modal body text goes here.
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" class="px-6
          py-2.5
          bg-purple-600
          text-white
          font-medium
          text-xs
          leading-tight
          uppercase
          rounded
          shadow-md
          hover:bg-purple-700 hover:shadow-lg
          focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-purple-800 active:shadow-lg
          transition
          duration-150
          ease-in-out" data-bs-dismiss="modal">Close</button>
        <button type="button" class="px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out
      ml-1">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>
 -->

<script type="text/javascript">
    
    $(document).on('click','.open_modal',function(){
        var url = "domain.com/yoururl";
        var tour_id= $(this).val();
        $.get(url + '/' + tour_id, function (data) {
            //success data
            console.log(data);
            $('#tour_id').val(data.id);
            $('#name').val(data.name);
            $('#details').val(data.details);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });
</script>

</x-admin-layout>
