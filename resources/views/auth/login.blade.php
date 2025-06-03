<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen bg-primary-color">
        <div class="p-10 rounded-xl shadow-lg bg-secondary-color w-[32%]">
            <img src="{{ asset('logo.png') }}" alt="" class="w-24 h-24 object-contain mx-auto mb-1">
            <h2 class="text-2xl font-medium font-poppins text-center mb-5">Login</h2>
            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-lg font-satoshi font-medium">Username</label>
                    <x-input id="name" type="text" :disabled="false" name="username"
                        placeholder="Enter your username"></x-input>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-lg font-satoshi font-medium">Password</label>
                    <div class="relative">
                        <x-input id="password" type="password" :disabled="false" name="password"
                            placeholder="Enter your password"></x-input>
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-3 top-2 text-gray-600">
                            <i class="far fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="button-primary !w-full ">
                    Sign In
                </button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-text-primary-color font-poppins">Don't have an account? <a
                        href="{{ url('register') }}" class="text-accent-color">Sign up</a></p>
            </div>
        </div>
        @if ($errors->any())
            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm bg-red-500 text-sm text-white rounded-lg p-4"
                role="alert" tabindex="1" aria-labelledby="hs-solid-color-danger-label">
                <span id="hs-solid-color-danger-label" class="font-bold">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </span>
            </div>
        @endif
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye / eye-slash icon
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
