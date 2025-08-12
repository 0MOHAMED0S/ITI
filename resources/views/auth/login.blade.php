{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to Exclusive</title>
    <link rel="stylesheet" href="{{asset('assets/auth/css/create&login.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .mt-2{
            margin: 0 !important;
            padding: 0 !important;
        }
    </style>
</head>
<body>
        <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="left-panel">
            <img src="{{asset('assets/auth/image/cart&smartphone.png')}}" alt="A smartphone and shopping cart" class="panel-image">
        </div>
        <div class="right-panel">
            <div class="form-container">
                <h1>Log in to Exclusive</h1>
                <p>Enter your details below</p>

                <form id="loginForm"method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="email" name="email" placeholder="Email or Phone Number" value="{{old('email')}}">
                        <x-input-error :messages="$errors->get('email')"   class="mt-2" style="color: red;font-size:15px" />
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password" >
                        <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red;font-size:15px"/>
                    </div>

                    <div class="action-buttons">
                        <button type="submit" class="log-in-btn">Log In</button>
                        {{-- <a href="#" class="forgot-password">Forgot Password?</a> --}}
                    </div>
                </form>

                <p class="signup-link">
                    Don't have an account? <a href="{{route('register')}}">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
