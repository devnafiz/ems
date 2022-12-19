<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Edit Application Form
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >
      
      <form method="post" action="{{ route('student.registration.update', Auth::user()->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <!-- Full Name -->
        <div>
            <x-label for="student_name" :value="__('Full Name')" />

            <x-input id="student_name" class="block mt-1 w-full" type="text" name="student_name" value="{{ $user->student_name }}" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" readonly />
        </div>

        <!-- Mobile Number -->
        <div class="mt-4">
            <x-label for="mobile_number" :value="__('Mobile Number')" />

            <x-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number" value="{{ $user->mobile_number }}" required />
        </div>


        @foreach ($students as $student)
        <!-- Passport Number -->
        <div class="mt-4">
            <x-label for="passport_number" :value="__('Passport Number')" />

            <x-input id="passport_number" class="block mt-1 w-full" type="text" name="passport_number" value="{{ $student->passport_number }}" required autofocus />
        </div>
        
        <!-- Select Programme -->
        <div class="mt-4">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Programme</label>
            <select id="countries" name="programme" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="{{ $student->programme }}">{{ $student->programme }}</option>
              <option value="Foundation">Foundation</option>
              <option value="Diploma">Diploma</option>
              <option value="Bachelor">Bachelor</option>
              <option value="Masters">Masters</option>
              <option value="PhD">PhD</option>
              <option value="MBBS">MBBS</option>
              <option value="others">Others</option>
            </select>
        </div>

        <!-- Subject Name -->
        <div class="mt-4">
            <x-label for="subject_name" :value="__('Subject Name')" />

            <x-input id="subject_name" class="block mt-1 w-full" type="text" name="subject_name" value="{{ $student->subject_name }}" required autofocus />
        </div>

        <!-- Photo -->
        <div class="mt-4">
            <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="photo">Photo</x-label>
            <span class="sr-only">Choose File</span>
            <img src="{{ asset('uploads/photo') }}/{{ $student->photo }}" alt="img" style="width: 70px; height: 60px" >
            <input type="file" id="photo" name="photo"
              class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
        </div>

        <!-- Passport -->
        <div class="mt-6">
          <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Passport</x-label>
        
          <div  class="mt-2 grid grid-cols-3 gap-3">
            <div>
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="passport_copy1">Passport Page no 1</x-label>
                <span class="sr-only">Choose File</span>
                <img src="{{ asset('uploads/passport') }}/{{ $student->passport_copy1 }}" alt="img" style="width: 70px; height: 60px" >
                <input type="file" id="passport_copy1" name="passport_copy1"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <div>
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="passport_copy2">Passport Page no 2</x-label>
                <span class="sr-only">Choose File</span>
                <img src="{{ asset('uploads/passport') }}/{{ $student->passport_copy2 }}" alt="img" style="width: 70px; height: 60px" >
                <input type="file" id="passport_copy2" name="passport_copy2"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <div>
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="passport_copy3">Passport Last Page</x-label>
                <span class="sr-only">Choose File</span>
                <img src="{{ asset('uploads/passport') }}/{{ $student->passport_copy3 }}" alt="img" style="width: 70px; height: 60px" >
                <input type="file" id="passport_copy3" name="passport_copy3"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
          </div>
        </div>
        @endforeach


        
         <!-- Academic Certificate -->
         <div class="mt-8">
          <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Academic Certificate</x-label>

          <div  class="">
          
          <div data-repeater-list="academic-certificate">
          @foreach ($certificates as $key=>$certificate)
          <div class="mt-2 row justify-content-between " data-repeater-item>
            <div class="col-md-2 col-sm-12">
              <label for="academic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Programme</label>
              <select id="academic_0" name="academic_programme[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="{{ $certificate->academic_programme }}">{{ $certificate->academic_programme }}</option>
                <option value="Foundation">Foundation</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Masters">Masters</option>
                <option value="PhD">PhD</option>
                <option value="MBBS">MBBS</option>
                <option value="others">Others</option>
              </select>
            </div>
            <div class="col-md-2 col-sm-12">
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="certificate">Certificate</x-label>
                <span class="sr-only">Choose File</span>
                <img src="{{ asset('uploads/certificates') }}/{{ $certificate->certificate }}" alt="img" style="width: 70px; height: 60px" >
                <input type="file" id="certificate_0" name="certificate[]" value="{{ $certificate->certificate }}"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <div class="col-md-2 col-sm-12">
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="marksheet">Marksheet</x-label>
                <span class="sr-only">Choose File</span>
                <img src="{{ asset('uploads/marksheet') }}/{{ $certificate->marksheet }}" alt="img" style="width: 70px; height: 60px" >
                <input type="file" id="marksheet_0" name="marksheet[]" value="{{ $certificate->marksheet }}"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <div  class="col-md-2 col-sm-12 d-flex align-items-center pt-2">
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                Delete
              </button>
            </div>
            @endforeach
          </div>
          

          <div  class="repeater-default">
          <div data-repeater-list="academic-certificate">
            
          <div class="mt-2 row justify-content-between hide" data-repeater-item style="display:none;">
            <div class="col-md-2 col-sm-12">
              <label for="academic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Programme</label>
              <select id="academic_0" name="academic_programme" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">anas</option>
                <option value="Foundation">Foundation</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Masters">Masters</option>
                <option value="PhD">PhD</option>
                <option value="MBBS">MBBS</option>
                <option value="others">Others</option>
              </select>
            </div>
            <div class="col-md-2 col-sm-12">
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="certificate">Certificate</x-label>
                <span class="sr-only">Choose File</span>
                <input type="file" id="certificate_0" name="certificate"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <div class="col-md-2 col-sm-12">
                <x-label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="marksheet">Marksheet</x-label>
                <span class="sr-only">Choose File</span>
                <input type="file" id="marksheet_0" name="marksheet"
                  class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>
            <div  class="col-md-2 col-sm-12 d-flex align-items-center pt-2">
              <div class="border">
                <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm">
              </div>
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" data-repeater-delete type="button"> <i class="bx bx-x"></i>
                Delete
              </button>
            </div>
          </div>
          
          </div>
          
          <hr>
          <div class="form-group">
            <div class="col p-0 pt-2">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-repeater-create type="button"><i class="bx bx-plus"></i>
                Add
              </button>
            </div>
          </div>
        </div>
        
        

        <div class="flex mt-6 text-sm">
          <label class="flex items-center dark:text-gray-400">
            <input
              type="checkbox"
              class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            />
            <span class="ml-2">
              I agree to the
              <span class="underline">privacy policy</span>
            </span>
          </label>
        </div>

        <div>
          <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline float-right" type="submit">
            Update
          </button>
        </div>
      </form>

      </div>
  </div>


</x-admin-layout>
