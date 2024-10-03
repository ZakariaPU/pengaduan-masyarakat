<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img class="custom-logo-size" src="assets/img/logo_sigapnet_biru.png" alt="Logo">
            </a>
        </x-slot>

        <style>
            .custom-logo-size {
                width: 120px;
                height: auto; /* Maintain aspect ratio */
            }
            /* Custom styles for the form */
            .form-input {
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                transition: border-color 0.3s;
            }
            .form-input:focus {
                border-color: #4A90E2; /* Change border color on focus */
                outline: none; /* Remove default outline */
            }
            .form-label {
                font-weight: bold;
                margin-bottom: 5px;
                display: block;
            }
            .register-button {
                background-color: #4A90E2;
                color: white;
                font-weight: bold;
                border-radius: 5px;
                padding: 10px 20px;
                transition: background-color 0.3s, transform 0.3s;
            }
            .register-button:hover {
                background-color: #357ABD; /* Darker blue on hover */
                transform: scale(1.05); /* Slightly enlarge on hover */
            }
            .flex-center {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        </style>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NIK -->
            <div>
                <x-label for="nik" :value="__('NIP/NRP')" class="form-label" />
                <x-input id="nik" class="form-input block mt-1 w-full" type="text" name="nik" :value="old('nik')" required autofocus />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" class="form-label" />
                <x-input id="name" class="form-input block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" class="form-label" />
                <x-input id="email" class="form-input block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('No. HP')" class="form-label" />
                <x-input id="phone" class="form-input block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="form-label" />
                <x-input id="password" class="form-input block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Konfirmasi Sandi')" class="form-label" />
                <x-input id="password_confirmation" class="form-input block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-button class="register-button ml-3">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
