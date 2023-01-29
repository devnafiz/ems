<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex justify-end p-2">
                  
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    SL
                                </th>

                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>

                                <th scope="col" class="py-3 px-6">
                                    Reference Id
                                </th>

                                 <th scope="col" class="py-3 px-6">
                                    Nationality
                                </th>
                                 <th scope="col" class="py-3 px-6">
                                    Passport No
                                </th>
                                 <th scope="col" class="py-3 px-6">
                                   Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $k=>$ad)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="py-4 px-6 font-medium">{{$k+1}}</td>
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $ad->user->student_name }}
                                    </th>
                                     <td class="">{{$ad->reference_id ?? 'N/A'}}</td>
                                     <td class="">{{$ad->nationality}}</td>
                                   
                                    <td class="">{{$ad->passport_number}}</td>
                                    <td><span class="badge badge-info">{{$ad->appstatus->name ?? 'N/A'}}</span></td>
                                    <td class="py-4 px-6">
                                        <div class="flex space-x-2">
                                            <a href="{{route('agency.application.show',$ad->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">details</a>
                                        
                                            
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
</x-admin-layout>
