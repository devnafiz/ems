<x-admin-layout>
   
    <div class="py-12 w-full">
        <div class=" mx-auto sm:px-8 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                <div class="flex justify-end p-2">
                  
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto table-bordered">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-1 px-2">
                                    SL
                                </th>

                                <th scope="col" class="py-1 px-2">
                                    Name
                                </th>
                                 <th scope="col" class="py-1 px-2">
                                    Student Id
                                </th>

                                <th scope="col" class="py-1 px-2">
                                    Reference Id
                                </th>

                                 <th scope="col" class="py-1 px-2">
                                    Nationality
                                </th>
                                 <th scope="col" class="py-1 px-2">
                                    Passport No
                                </th>
                                 <th scope="col" class="py-1 px-2">
                                    Application Status
                                </th>
                                <th scope="col" class="py-1 px-2">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $k=>$ad)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="py-1 px-2 font-medium">{{$k+1}}</td>
                                    <th scope="row" class="py-1 px-2 font-medium text-gray-800 whitespace-nowrap dark:text-white">
                                        {{ $ad['user']->student_name ?? ''}}
                                    </th>
                                    <td class="py-1 px-2 text-gray-800">{{$ad['user']->generated_id ?? ''}}</td>
                                     <td class="py-1 px-2 text-gray-800"><a href="{{route('admin.application.get.info',$ad->id) }}">{{$ad->reference_id ?? 'N/A'}}</a></td>
                                     <td class="py-1 px-2 text-gray-800">{{$ad->nationality ?? ''}}</td>
                                   
                                    <td class="py-1 px-2 text-gray-800">{{$ad->passport_number}}</td>
                                    <td class="py-1 px-2 text-gray-800"><span class="badge badge-info">{{$ad->appstatus->name ?? 'N/A'}}</span></td>
                                    <td class="py-1 px-2">
                                        <div class="flex space-x-2">
                                           <a href="{{route('admin.all-application.edit',$ad->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Edit</a>
                                            <a href="{{route('admin.all-application.show',$ad->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">details</a>
                                        
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
                    <div class="pagination">
                        {{$applications->links()}}
                        
                    </div>
                     <br/>
                </div>


                </div>
            </div>
        </div>
    </div>





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
