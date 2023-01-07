<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h2 style="font-size: 1.5em;">Institute Registration</h2>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>

                <x-input id="name" class="block mt-1 w-full" type="hidden" value="institute" name="name" />
            </div>
            
            <!-- Full Name -->
            <div>
                <x-label for="institute_name" :value="__('Institute Full Name')" />

                <x-input id="institute_name" class="block mt-1 w-full" type="text" name="institute_name" :value="old('institute_name')" required autofocus />
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
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>