<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            @if(!empty($setting))
             <a href="{{url('/')}}">
         
            <img src="{{asset('uploads/logo/'.$setting['logo'])}}" width="100%" class="max-w-xl  h-30 fill-current text-gray-500 px-4" style="padding: 68px;">
        </a>
            @else
               <a href="{{url('/')}}">
         
            <img src="{{asset('assets/img/Unice-Education_Malaysia.png')}}" width="100%" class="max-w-xl  h-30 fill-current text-gray-500 px-4" style="padding: 68px;">
        </a>
        @endif
            <h2 style="font-size: 1.5em;text-align: center;">Agency Registration</h2>
        </x-slot>
         @if(Session::has('message'))
          <div class="bg-indigo-600" x-data="{open: true}" x-show="open">
              <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
                  <div class="flex flex-wrap items-center justify-between">
                  <div class="flex w-0 flex-1 items-center">
                      <span class="flex rounded-lg bg-indigo-800 p-2">
                      <!-- Heroicon name: outline/megaphone -->
                      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                      </svg>
                      </span>
                      <p class="ml-3 truncate font-medium text-white">
                      <span class="md:hidden">{{ Session::get('message') }}</span>
                      <span class="hidden md:inline">{{ Session::get('message') }}</span>
                      </p>
                  </div>
                  <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                      <button @click="open = false" type="button" class="-mr-1 flex rounded-md p-2 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                      <span class="sr-only">Dismiss</span>
                      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                      </button>
                  </div>
                  </div>
              </div>
          </div>
      @endif

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
           
            <div>

                <x-input id="name" class="block mt-1 w-full" type="hidden" value="agency" name="name" />
            </div>

            <!-- Agency Name -->
            <div>
                <x-label for="agency_name" :value="__('Agency')" />

                <x-input id="agency_name" class="block mt-1 w-full" type="text" name="agency_name" :value="old('agency_name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Mobile Number -->
            <div class="mt-4">
                <x-label for="mobile_number" :value="__('Mobile Number')" />

                <x-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number" :value="old('mobile_number')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('If already registered? login here') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
