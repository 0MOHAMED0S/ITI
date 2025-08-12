{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
    <title>Create an account</title>
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
    <div class="container">
        <div class="left-panel">
            <img src="{{asset('assets/auth/image/cart&smartphone.png')}}" alt="A smartphone and shopping cart" class="panel-image">
        </div>
        <div class="right-panel">
            <div class="form-container">
                <h1>Create an account</h1>
                <p>Enter your details below</p>

                <form id="createAccountForm"method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="name" name="name" placeholder="Name" >
                        <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red;font-size:15px" />
                    </div>
                    <div class="input-group">
                        <input type="text" id="email" name="email" placeholder="Email or Phone Number"
                            >
                        <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red;font-size:15px" />
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" placeholder="Password" >
                        <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red;font-size:15px"/>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password_confirmation" placeholder="Confirm Password" >
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red;font-size:15px"/>
                    </div>
                    <button type="submit" class="create-account-btn">Create Account</button>
                </form>

                <div class="separator">
                    <span>or</span>
                </div>
                <a href="#" class="google-signup-btn"
                    onclick="window.open('https://accounts.google.com/signup', '_blank'); return false;">
                    <svg class="google-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#4285F4">
                        <path
                            d="M22.56 12.028c0-.75-.064-1.472-.186-2.17H12.28v4.148h5.604c-.244 1.258-.87 2.37-1.782 3.194l-.001.001 3.51 2.72c2.04-1.884 3.238-4.66 3.238-8.156z" />
                        <path
                            d="M12.28 23c2.955 0 5.43-1.127 7.23-2.956L15.998 17.3c-.912.824-2.138 1.45-3.718 1.45-2.85 0-5.27-1.928-6.13-4.52H2.336v2.853C4.24 20.43 8.01 23 12.28 23z" />
                        <path
                            d="M6.15 14.82c-.17-.506-.27-1.042-.27-1.586 0-.544.1-.08.27-1.586V8.8h-3.81v2.854c.69 2.21 2.51 3.84 4.08 3.166z" />
                        <path
                            d="M12.28 3.99c1.65 0 3.11.58 4.27 1.67L19.82 2c-1.8-1.72-4.27-2.99-7.54-2.99C8.01 0 4.24 2.57 2.336 6.51L6.15 8.8c.86-2.59 3.28-4.52 6.13-4.52z" />
                    </svg>
                    <span>Sign up with Google</span>
                </a>
                <p class="login-link">
                    Already have an account? <a href="{{route('login')}}">Log in</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
