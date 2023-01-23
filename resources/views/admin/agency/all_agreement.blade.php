<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7x1 mx-auto sm:px-8 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5 bg-white border-b border-gray-200">

                <div class="flex justify-end p-2">
                  
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-1">
                                    SL
                                </th>

                                <th scope="col" class="py-2 px-1">
                                   Agency Name
                                </th>
                                 <th scope="col" class="py-2 px-1">
                                    Email
                                </th>
                                  <th scope="col" class="py-2 px-1">
                                    Agency Id
                                </th>
                                 <th scope="col" class="py-2 px-1">
                                   Mobile Number
                                </th>
                                 <th scope="col" class="py-2 px-1">
                                   Status
                                </th>
                                <th scope="col" class="py-2 px-1">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_data as $k=>$val)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="py-4 px-6 font-medium">{{$k+1}}</td>
                                    <th scope="row" class="py-4 px-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $val->user->agency_name ?? ''}}
                                    </th>
                                    <td class="">{{$val->user->email ?? ''}}</td>
                                     <td class="">{{$val->generated_id ?? 'N/A'}}</td>
                                    <td class="">{{$val->user->mobile_number ?? ''}}</td>
                                    <td class="">   @if($val->status == 1)
                                        <span class="badge badge-pill badge-success"> Active </span>
                                        @else
                                       <span class="badge badge-pill badge-danger"> InActive </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex space-x-2">
                                             <a href="{{route('admin.agreement.view',$val->id)}}" class="px-4 py-2 bg-green-500 hover:bg-blue-700 text-white rounded-md"><i></i>View</a>
                                            <a href="#" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md"><i></i>Edit</a>
                                             <a href="{{route('admin.agency.delete',$val->id)}}" class="px-4 py-2 bg-red-500 hover:bg-blue-700 text-white rounded-md"><i></i>Delete</a>

                                             @if($val->status == 1)
                                             <a href="{{route('admin.agency.inactive',$val->id)}}" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i>Inactive </a>
                                            @else
                                             <a href="{{route('admin.agency.active',$val->id)}}" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i>Active </a>
                                            @endif
                                        
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination">
                        {{$all_data->links()}}
                        
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</x-admin-layout>