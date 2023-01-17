<x-admin-layout>
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
      Edit Progress Status
      </h2>
      <!-- General elements -->
      <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
      >

      <form method="POST" action="{{ route('admin.progress.update',$edit_data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Full Name -->
       

       

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="status" :value="__('Application Status')" />

            <select class="selectpicker form-control border-0 mb-1 px-4 py-4 rounded shadow one" name="status" id="status">
                                <option value="" >Select Status</option>
                                @foreach($status as $k =>$val)
                                <option value="{{$val->id}}" {{($edit_data->status==$val->status) ?'selected' :''}}>{{$val->name}}</option>
                                @endforeach
                                
                               
                                
                    </select>
        </div>
         <div class="mt-4">
              <x-label for="status" :value="__('Feedback')" />
             <textarea class="form-control form-control-solid block mt-1" rows="4" name="feedback">
                  {{$edit_data->feedback}}
             </textarea>

          </div>  

        <!-- Mobile Number -->
        <div class="mt-4">
            <x-label for="mobile_number" :value="__('Document')" />

         <input type="file" name="status_file" class="form-control" id="status_file">

          @if ($edit_data->status_file &&
                                                    file_exists(public_path('uploads/status/' . $edit_data->status_file)))
                                                    <a class="text-black badge badge-danger"
                                                        href="{{ asset('uploads/status/' . $val->status_file) }}"
                                                        download><i class="fa fa-file fa-2x" aria-hidden="true"></i>Download</a>
                                                @else
                                                    <h6><span class="badge badge-danger">no file</span></h6>
                                                @endif
        </div>

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
