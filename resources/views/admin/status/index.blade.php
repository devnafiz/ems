<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                
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
                              <!--   <th scope="col" class="py-3 px-6">
                                    Percentage
                                </th> -->
                                <th scope="col" class="py-3 px-6">
                                    status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_data as $k=>$val)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td scope="row" class="py-4  px-6 ">
                                        {{$k+1}}
                                        
                                    </td>
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $val->name }}
                                    </th>
                                    <!-- <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $val->percentage }}%
                                    </td> -->
                                     <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $val->status }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex space-x-2">
                                            <a href="#" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">edit</a>
                                            
                                        
                                            <form method="POST" action="{{ route('admin.users.distroy', $val->id) }}" onsubmit="return confirm('Are You Sure?');" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
