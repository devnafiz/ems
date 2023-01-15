<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
     Subject  create
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.subjects.store') }}" >
        @csrf
         @method('POST')
        <!-- Full Name -->
        <div>
            <x-label for="subject_name" :value="__('Subject Name')" />

            <x-input id="subject_name" class="block mt-1 w-full" type="text" name="subject_name" required  />
        </div>

        <div class="mt-4">
            <x-label for="programme_name" :value="__('programme Name')" />

           <select id="programme_id" name="programme_id" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach($programmes as $k=>$val)

              <option value="{{$val->programme_id}}">{{$val->programme_name}}</option>

             @endforeach 
                                      
            </select>
        </div>

        

   
        

        <div class="flex mt-6 text-sm">
          <label class="flex items-center dark:text-gray-400">
            <input
              type="checkbox"
              class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              name="status" value="1"/>
            <span class="ml-2">
              Status
             
            </span>
          </label>
        </div>

        <div>
          <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline float-right" type="submit">
            Submit
          </button>
        </div>
      </form>

      </div>
  </div>


</x-admin-layout>
