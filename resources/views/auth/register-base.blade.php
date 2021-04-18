<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>

            <h1>Register @yield('register_heading')</h1>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- CNIC -->
            <div class="mt-4">
                <x-label for="cnic" :value="__('CNIC')" />

                <x-input id="cnic" class="block mt-1 w-full" type="text" name="cnic" :value="old('cnic')" required />
            </div>
            
            <!-- Package -->
            <div class="mt-4">
                <x-label for="package" :value="__('Package')" />

                <x-select id="package" class="block mt-1 w-full" name="package" :value="['admission_fee' => 'Admission Fee', 'monthly_fee' => 'Monthly Fee', 'trainer' => 'Trainer']" required />
            </div>

            @yield('password_field')

            @yield('user_type')
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dashboard') }}">
                    {{ __('Go Back') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
