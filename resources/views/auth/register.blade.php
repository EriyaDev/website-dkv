<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen py-2 bg-primary-color">
        <div class="p-5 sm:p-10 rounded-xl shadow-lg bg-secondary-color w-80 sm:w-96 md:w-[420px]">
            <img src="{{ asset('logo.png') }}" alt="" class="w-24 h-24 object-contain mx-auto mb-1">
            <h2 class="text-2xl font-medium font-poppins text-center mb-5">Register</h2>
            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm sm:text-lg font-satoshi font-medium">Name</label>
                    <x-input id="name" type="text" :disabled="false" name="name"
                        placeholder="Enter your name"></x-input>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm sm:text-lg font-satoshi font-medium">Username</label>
                    <x-input id="username" type="text" :disabled="false" name="username"
                        placeholder="Enter your username"></x-input>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-sm sm:text-lg font-satoshi font-medium">Email</label>
                    <x-input id="email" type="email" :disabled="false" name="email"
                        placeholder="Enter your email"></x-input>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-sm sm:text-lg font-satoshi font-medium">Password</label>
                    <div class="relative">
                        <x-input id="password" type="password" :disabled="false" name="password"
                            placeholder="Enter your password"></x-input>
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-3 top-1 text-gray-600">
                            <i class="far fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="button-primary w-full cursor-pointer">
                    Sign Up
                </button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-xs md:text-sm text-text-primary-color font-poppins">have an account? <a href="{{ url('login') }}"
                        class="text-accent-color hover:underline">Sign in</a></p>
            </div>
        </div>
        @if ($errors->any())
            <div class="mt-5 w-72 sm:w-96 md:w-[420px] bg-red-500 text-sm text-white rounded-lg p-2 mb-2">
                <span class="font-bold">
                    <ul class="list-disc list-inside text-left">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="p-10 rounded-xl shadow-lg">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRh4S0bP26smizOxv5PatRk2iiNe3WCLzM4A&s"
                alt="" class="w-24 h-24 mx-auto rounded-full shadow-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
            <form action="{{ route('register') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label for="name" class="text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-3 top-2 text-gray-600">
                            <i class="far fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Sign Up
                </button>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Have an account? <a href="{{ url('login') }}"
                        class="text-blue-600 hover:underline">Sign In</a></p>
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

</html> --}}
