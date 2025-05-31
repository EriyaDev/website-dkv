<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reset Password</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center justify-center min-h-screen">
    <div class="p-10 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-center mt-5 mb-10">Reset Password</h2>

        @if ($errors->any())
            <div class="mt-5 mb-5 sm:mx-auto sm:w-full sm:max-w-sm bg-red-500 text-sm text-white rounded-lg p-4" role="alert"
                tabindex="1" aria-labelledby="hs-solid-color-danger-label">
                <span id="hs-solid-color-danger-label" class="font-bold">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </span>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700">Email Address</label>
                <input id="email" type="email" name="email" required autofocus value="{{ old('email') }}"
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label for="password" class="block mb-1 font-medium text-gray-700">New Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label for="password_confirmation" class="block mb-1 font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                Reset Password
            </button>
        </form>
    </div>
</body>
</html>
