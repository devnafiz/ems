<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl text-center font-semibold text-gray-700 dark:text-gray-200"
      >
     Site Setting
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.update.sitesetting') }}" enctype="multipart/form-data">
        @csrf
        <!-- Full Name -->
        <input type="hidden" name="id" value="{{$edit_data->id ?? ''}}">

        <div>
            <x-label for="site_name" :value="__('Site Name')" />

            <x-input id="site_name" class="block mt-1 w-full" type="text" name="site_name" value="{{ $edit_data->site_name }}"  autofocus />
        </div>

        <div>
            <x-label for="student_name" :value="__('Phone One')" />

            <x-input id="phone_one" class="block mt-1 w-full" type="text" name="phone_one" value="{{ $edit_data->phone_one }}"  autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $edit_data->email }}"  />
        </div>

        <!-- Mobile Number -->
        <div class="mt-4">
            <x-label for="Company Name" :value="__('Company Name')" />

            <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" value="{{ $edit_data->company_name }}"  />
        </div>

      
        
       

        <!-- Subject Name -->
      

          <div class="mt-4">
            <x-label for="contact_person" :value="__('Company Address')" />

            <x-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" value="{{ $edit_data['company_address'] ?? '' }}"  />
        </div>

        <!-- Subject Name -->
      

          <div class="mt-4">
            <x-label for="facebook" :value="__('Facebook')" />

            <x-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" value="{{ $edit_data['facebook'] ?? '' }}"  />
        </div>
        <!-- Subject Name -->
      

          <div class="mt-4">
            <x-label for="twitter" :value="__('Twitter')" />

            <x-input id="twitter" class="block mt-1 w-full" type="text" name="twitter" value="{{ $edit_data['twitter'] ?? '' }}"  />
        </div>

         <div class="mt-4">
            <x-label for="linkedin" :value="__('Linkedin')" />

            <x-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin" value="{{ $edit_data['linkedin'] ?? '' }}"  />
        </div>

         <div class="mt-4">
            <x-label for="youtube" :value="__('Youtube')" />

            <x-input id="youtube" class="block mt-1 w-full" type="text" name="youtube" value="{{ $edit_data['youtube'] ?? '' }}"  />
        </div>

        
       
        <!-- Photo -->
        <div class="row">
          <div class="col-md-4">
              <div class="mt-4">
                  <x-label class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300" for="photo">Site Logo</x-label>
                  <span class="sr-only">Choose Logo</span>
                  <input type="file" id="logo" name="logo"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

                    <div class="col-md-3">
                              @if ($edit_data->logo &&
                              file_exists(public_path('uploads/logo/' . $edit_data->logo)))
                              <a class="text-black" href="{{ asset('uploads/logo/' . $edit_data->logo) }}" download><i class="fa fa-file fa-3x" aria-hidden="true"></i>Download</a>
                              @else
                              <h6><span class="badge badge-danger">No Logo</span></h6>
                              @endif
                     </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mt-4">
                  <x-label class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300" for="photo">Admin Signature</x-label>
                  <span class="sr-only">Admin Signature</span>
                  <input type="file" id="signature" name="signature"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

                    <div class="col-md-3">
                              @if ($edit_data->signature &&
                              file_exists(public_path('uploads/logo/' . $edit_data->signature)))
                              <a class="text-black" href="{{ asset('uploads/logo/' . $edit_data->signature) }}" download><i class="fa fa-file fa-3x" aria-hidden="true"></i>Download</a>
                              @else
                              <h6><span class="badge badge-danger">No signature</span></h6>
                              @endif
                     </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="mt-4">
                  <x-label class="block mb-2 text-sm font-medium text-gray-800 dark:text-gray-300" for="photo">Certificate Logo</x-label>
                  <span class="sr-only">Certificate Logo</span>
                  <input type="file" id="certificate_logo" name="certificate_logo"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

                    <div class="col-md-3">
                              @if ($edit_data->certificate_logo &&
                              file_exists(public_path('uploads/logo/' . $edit_data->certificate_logo)))
                              <a class="text-black" href="{{ asset('uploads/logo/' . $edit_data->certificate_logo) }}" download><i class="fa fa-file fa-3x" aria-hidden="true"></i>Download</a>
                              @else
                              <h6><span class="badge badge-danger">No Logo</span></h6>
                              @endif
                     </div>
                </div>
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
