<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="flex p-2">
                   
                </div>
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                    <div class="space-y-8 divide-y divide-gray-200  mt-10 p-2 w-full">
                        <form method="POST" action="{{ route('agency.agreement.save',$all_data->id ) }}">
                            @csrf
                           <input type="hidden" name="user_id" value="{{$all_data->id }}">
                            <input type="hidden" name="generated_id" value="{{$all_data->generated_id }}">
                            <div class="sm:col-span-12 lg:col-span-12">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Terms & conditions </label>
                                <div class="mt-1">
                                   <!--  <textarea id="name" name="name" class="w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" rows="20" > -->
                                    <div style="border-radius: 2px; border: 1px solid #32e; padding:13px;">
                                    License Agreement

                                     
                                    <p> This License Agreement is made and effective as of now by and between Sender Company, a company organized and existing in Sender Country, with a registered address at Sender Address ("Licensor") and Client Company, a company organized and existing in Client Country, with a '\n\n' registered address at Client Address ("Licensee").</p>
                                     
                                     WHEREAS:
                                    <p> 
                                     Licensee wishes to obtain a license to use Description of product (hereinafter, the "Asset"), and
                                     Licensor is willing to grant to the Licensee a non-exclusive, non-transferable License to use the Asset for the term and specific purpose set forth in this Agreement,
                                     NOW, THEREFORE, in consideration of the foregoing, and of the mutual promises and undertakings contained herein, and other good and valuable consideration, the parties </p>
                                     agree as follows:
                                     
                                    <p> 1. Definitions</p>
                                    <p>  1.1 "Agreement" means this License Agreement including the attached Schedule.</p>
                                     
                                    <p>  1.2 "Confidential Information" means information that:</p>
                                     a. is by its nature confidential;
                                     b. is designated in writing by Licensor as confidential;
                                     c. the Licensee knows or reasonably ought to know is confidential;
                                     d. Information comprised in or relating to any Intellectual Property Rights of Licensor.</p>
                                     
                                    <p>  1.3 "Asset" means the Asset provided by Licensor as specified in Item 6 of the Schedule in the form as stated in Item 7 of the Schedule.</p>
                                     
                                    <p>  1.4 "Intellectual Property Rights" means all rights in and to any copyright, trademark, trading name, design, patent, know how (trade secrets) and all other rights resulting from intellectual activity in the industrial, scientific, literary or artistic field and any application or right to apply for registration of any of these rights and any right to protect or enforce any of these rights, as further specified in clause</p> 5.
                                     
                                     <p> 1.5 "Party" means a person or business entity who has executed this Agreement; details of the Parties are specified in Item 2 of the Schedule.</p>
                                     
                                   <p>1.6 "Term" means the term of this Agreement commencing on the Commencement Date as specified in Item 4 of the Schedule and expiring on the Expiry Date specified in Item 5 of the Schedule.</p>
                                     
                                   <p>2. License Grant</p>
                                    <p> 2.1 Licensor grants to the Licensee a non-exclusive, non-transferable License for the Term to use the Asset for the specific purpose specified in this Agreement, subject to the terms and conditions set out in this Agreement.</p>
                                     
                                     <p>3. Charges</p>
                                    <p> 3.1 In consideration of the Licensor providing the License under clause 2 of this License Agreement, the Licensee agrees to pay Licensor the amount of the License Charge as specified in Item 9 of the Schedule.</p>
                                     
                                     <p>4. Licensee’s Obligations</p>
                                    <p> 4.1 The Licensee cannot use the Asset, for purposes other than as specified in this Agreement and in Item 8 of the Schedule.</p>
                                     
                                    <p> 4.2 The Licensee may permit its employees to use the Asset for the purposes described in Item 8, provided that the Licensee takes all necessary steps and imposes the necessary conditions to ensure that all employees using the Asset do not commercialise or disclose the contents of it to any third person, or use it other than in accordance with the terms of this Agreement.</p>
                                     
                                    <p> 4.3 The Licensee will not distribute, sell, License or sub-License, let, trade or expose for sale the Asset to a third party.</p>
                                     
                                    <p> 4.4 No copies of the Asset are to be made other than as expressly approved by Licensor.</p>
                                     
                                     <p>4.5 No changes to the Asset or its content may be made by Licensee.</p>
                                     
                                   <p>  4.6 The Licensee will provide technological and security measures to ensure that the Asset which the Licensee is responsible for is physically and electronically secure from unauthorised use or access.</p>
                                     
                                    <p> 4.7 Licensee shall ensure that the Asset retains all Licensor copyright notices and other proprietary legends and all trademarks or service marks of Licensor.</p>
                                     
                                    <p> 5. Intellectual Property Rights</p>
                                   <p>  5.1 All Intellectual Property Rights over and in respect of the Asset are owned by Licensor. The Licensee does not acquire any rights of ownership in the Asset.</p>
                                     
                                    <p> 6. Limitation of Liability</p>
                                     6.1 The Licensee acknowledges and agrees that neither Licensor nor its board members, officers, employees or agents, will be liable for any loss or damage arising out of or resulting from Licensor’s provision of the Asset under this Agreement, or any use of the Asset by the Licensee or its employees; and Licensee hereby releases Licensor to the fullest extent from any such liability, loss, damage or claim.
                                     
                                    <p>  7. Confidentiality
                                      <p>7.1 Neither Party may use, disclose or make available to any third party the other Party’s Confidential Information, unless such use or disclosure is done in accordance with the terms of this Agreement.</p>
                                     
                                     <p> 7.2 Each Party must hold the other Party’s Confidential Information secure and in confidence, except to the extent that such Confidential Information:
                                     a. is required to be disclosed according to the requirements of any law, judicial or legislative body or government agency; or
                                     b. was approved for release in writing by the other Party, but only to the extent of and subject to such conditions as may be imposed in such written authorisation.</p>
                                     
                                     <p> 7.3 This clause 7 will survive termination of this Agreement.</p>
                                     
                                      <p>8. Disclaimers & Release</p>
                                     <p> 8.1 To the extent permitted by law, Licensor will in no way be liable to the Licensee or any third party for any loss or damage, however caused (including through negligence) which may be directly or indirectly suffered in connection with any use of the Asset.</p>
                                     
                                     <p> 8.2 The Asset is provided by Licensor on an "as is" basis.</p>
                                     
                                     <p> 8.3 Licensor will not be held liable by the Licensee in any way, for any loss, damage or injury suffered by the Licensee or by any other person related to any use of the Asset or any part thereof.</p>
                                     
                                     <p> 8.4 Notwithstanding anything contained in this Agreement, in no event shall Licensor be liable for any claims, damages or loss which may arise from the modification, combination, operation or use of the Asset with Licensee computer programs.</p>
                                     
                                      <p>8.5 Licensor does not warrant that the Asset will function in any environment.</p>
                                     
                                     <p> 8.6 The Licensee acknowledges that: a. The Asset has not been prepared to meet any specific requirements of any party, including any requirements of Licensee; and b. it is therefore the responsibility of the Licensee to ensure that the Asset meets its own individual requirements.</p>
                                     
                                   
                                     
                                    <p>  9. Entire Agreement</p>
                                     <p> 9.1 This Agreement contains the entire agreement between the Parties and supersedes any previous understanding, commitments or agreements, oral or written. Further, this Agreement may not be modified, changed, or otherwise altered in any respect except by a written agreement signed by both Parties.</p>
                                       
                                   <!--  </textarea>  -->
                                   </div> 
                                </div>
                                @error('name')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <br/>
                            <div class="sm:col-span-12">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Sign to confirm your agreement </label>
                                <div class="mt-1">
                                    <input type="file" id="name" name="signature_image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                                </div>
                                @error('name')
                                    <span class="text-red-400 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">agree</button>
                            </div>
                        </form>
                    </div>

                </div>


                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
      
      $('textarea').autoResize();

      $('document').ready(function()
{
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
});
    </script>

    <style type="text/css">
      textarea {
  outline: none;
}
    </style>
</x-admin-layout>
