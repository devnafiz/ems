<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Edit Status
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.status.update',$edit_data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Full Name -->
       

        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $edit_data->name }}" required autofocus />
        </div>

        <!-- Email Address -->
       <!--  <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="" readonly />
        </div> -->

        <!-- Mobile Number -->
        <!-- <div class="mt-4">
            <x-label for="mobile_number" :value="__('Status')" />

            <input id="status" class="form-check-input mt-1 checked:bg-blue-600" value="{{$edit_data->status}}" type="checkbox"  name="status" {{($edit_data['status']==1) ? 'checked' :''}}/>
        </div> -->

        <div>
            <br>
          <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline float-right" type="submit">
            Update
          </button>
        </div>
      </form>

      </div>
  </div>


</x-admin-layout>
