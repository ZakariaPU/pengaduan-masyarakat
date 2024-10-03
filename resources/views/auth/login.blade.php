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
                height: auto; /* Memastikan rasio tetap */
            }
            /* Tambahkan gaya untuk form login */
            .auth-card {
                background-color: #f8f9fa; /* Warna latar belakang */
                border-radius: 8px; /* Sudut melengkung */
                padding: 2rem; /* Padding di dalam card */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan */
            }
            .form-label {
                font-weight: bold; /* Membuat label lebih tebal */
                color: #333; /* Warna teks label */
            }
        </style>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" class="form-label" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="form-label" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('lupa kata sandi Anda?') }}
                    </a>
                @endif

                <x-button class="ml-3 bg-blue-500 text-white font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-600 hover:scale-105 duration-300 ease-in-out">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

