<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
     Programme  Edit
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.programmes.update',$edit_data->programme_id) }}" >
        @csrf
         @method('PUT')
        <!-- Full Name -->
        <div>
            <x-label for="programme_name" :value="__('Programme Name')" />

            <x-input id="programme_name" class="block mt-1 w-full" type="text" name="programme_name" value="{{$edit_data->programme_name}}" required  />
        </div>

        

   
        

        
        <br>
        <div>
          <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline float-right" type="submit">
            Update
          </button>
        </div>
      </form>

      </div>
  </div>


</x-admin-layout>
