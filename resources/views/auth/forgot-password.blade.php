<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forgot Password</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col items-center justify-center min-h-screen">
    <div class="p-10 rounded-xl shadow-lg">
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

        @if (Session::has('message'))
            <div class="w-full mt-4 mb-4 border border-green-200 rounded-md">
                <p class="p-3 bg-green-100 text-green-800 font-medium"><i
                        class="fa-solid fa-circle-check mr-3"></i>{{ Session::get('message') }}
                </p>
            </div>
        @endif
        <h2 class="text-2xl font-bold text-center mt-5 mb-10">Forgot Password</h2>


        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700">Email Address</label>
                <input id="email" type="email" name="email" required autofocus
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Send Password Reset Link
            </button>
        </form>
    </div>
</body>

</html>
