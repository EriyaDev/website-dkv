<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email Verificartion</title>
</head>
<body>
  <div class="flex flex-col items-center justify-center min-h-screen">
    <div class="p-10 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Verify Your Email Address</h2>
        <p class="text-center mb-4">A fresh verification link has been sent to your email address.</p>
        <form action="{{ route('verification.send') }}" method="POST" class="space-y-4">
            @csrf
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200" value="Resend Email Verification">
                Resend Verification Email
            </button>
        </form>
    </div>
</body>
</html>