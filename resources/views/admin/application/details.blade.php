<x-admin-layout>
    <div class="container px-6 mx-auto grid">
        <div class="flex justify-end p-2">
                    <a href="{{ route('admin.all-application.index') }}" class="px-4 py-2 bg-green-700 text-white hover:bg-green-500 rounded-md">All Application</a>
        </div>
        
        <div class="p-2">
            <h1 class="display-6 text-center">Details Information</h1>
        </div>

    <div class="row">
          <div class="p-4 pt-6 col-6">
             <div class="p-3 pt-6">
            <table class=" table table-bordered table-striped">
          
                <tbody>

                    <tr>
                        <th scope="row" class="mt-1 p-2">Student Name</th>
                        <td>{{ $application_details->student->student_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $application_details->mobile_number ?? N/A  }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Nationality</th>
                        <td>{{ $application_details->nationality ?? N/A  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number ?? N/A }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Date of Birth</th>
                        <td>{{ $application_details->date_of_birth  ?? N/A }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Issue Date</th>
                        <td>{{ $application_details->passport_issue_date  ?? N/A }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Obtain Single Entry Visa From</th>
                        <td>{{ $application_details->obtain_single_entry_visa ?? N/A  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant E-mail Id</th>
                        <td>{{ $application_details->applicant_email_id ?? N/A }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Sex</th>
                        <td>{{ $application_details->sex ?? N/A  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant Permanent Add</th>
                        <td>{{ $application_details->applicant_permanent_add ?? N/A  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Applicant Postal Code</th>
                        <td>{{ $application_details->applicant_postal_code ?? N/A }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Country</th>
                        <td>{{ $application_details->country ?? N/A  }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Resident Number</th>
                        <td>{{ $application_details->resident_number ?? N/A }}</td>
                    </tr>
                    <tr class="bg-white border table-row-gray-200">
                        <th scope="row" class="mt-1 p-2">Subject</th>
                        <td>{{ $application_details->subject ?? N/A }}</td>
                    </tr>



                 </tbody>
                 <tfoot>
                      <tr>
                        <th scope="row" class="mt-1 p-2"></th>
                        <td></td>
                    </tr>
                 </tfoot>
            </table>
                
        </div>
    </div>

    <div class="p-4 pt-6 col-6">
             <div class="p-3 pt-6">
            <table class=" table table-bordered">
          
                <tbody>

                    <tr>
                        <th scope="row" class="mt-1 p-2">Student Name</th>
                        <td>{{ $application_details->student->student_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Mobile Number</th>
                        <td>{{ $application_details->mobile_number }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="mt-1 p-2">Nationality</th>
                        <td>{{ $application_details->nationality }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>
                     <tr>
                        <th scope="row" class="mt-1 p-2">Passport Number</th>
                        <td>{{ $application_details->passport_number }}</td>
                    </tr>



                 </tbody>
            </table>
                
        </div>
    </div>
  </div>
    
  </div>
</x-admin-layout>