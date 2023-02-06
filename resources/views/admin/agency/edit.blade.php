<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Edit agency
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.agency.update',$edit_data->id) }}" enctype="multipart/form-data">
        @csrf
        <!-- Full Name -->
        <input type="hidden" name="user_id" value="{{$edit_data->id}}">

        <div>
            <x-label for="student_name" :value="__('Full Name')" />

            <x-input id="student_name" class="block mt-1 w-full" type="text" name="agency_name" value="{{ $edit_data->agency_name }}" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $edit_data->email }}" readonly />
        </div>

        <!-- Mobile Number -->
        <div class="mt-4">
            <x-label for="mobile_number" :value="__('Mobile Number')" />

            <x-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number" value="{{ $edit_data->mobile_number }}" required />
        </div>

      
        
       

        <!-- Subject Name -->
        <div class="mt-4">
            <x-label for="subject_name" :value="__('Country Name')" />

           <select id="country" name="country" class=" form-control form-control-solid bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach($countries as $k=>$country)
                                        <option value="{{$country->Name}}" @if($edit_data->profile)
                                                           {{ ($edit_data->profile->country==$country->Name) ?'selected' : ''}}
                                                          @else
                                                          @endif  
                                            >{{$country->Name}}</option>
                                        @endforeach
                                       
                                    </select>
        </div>

         <div class="mt-4">
            <x-label for="contact_person" :value="__('Contact Person')" />

            <x-input id="contact_person" class="block mt-1 w-full" type="text" name="contact_person" value="{{ $edit_data['profile']['contact_person'] ?? '' }}"  />
        </div>
        <div class="mt-4">
            <x-label for="address" :value="__('Address')" />

            <textarea id="address" class="block mt-1 w-full" type="text" name="address"   />{{ $edit_data['profile']->address ?? ''}}</textarea>
        </div>

        <!-- Photo -->
        <div class="mt-4">
            <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="photo">Profile Photo</x-label>
            <span class="sr-only">Choose File</span>
            <input type="file" id="pro_image" name="pro_image"
              class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

              <div class="col-md-3">
                        @if ($edit_data->pro_image &&
                        file_exists(public_path('uploads/profile/' . $edit_data->pro_image)))
                        <a class="text-black" href="{{ asset('uploads/profile/' . $edit_data->pro_image) }}" download><i class="fa fa-file fa-3x" aria-hidden="true"></i></a>
                        @else
                        <h6><span class="badge badge-danger">no file</span></h6>
                        @endif
          </div>
        </div>

      

         <!-- Academic Certificate -->
         
        
          
        

        

        <div>
          <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline float-right" type="submit">
            Update
          </button>
        </div>
      </form>

      </div>
  </div>


</x-admin-layout>
