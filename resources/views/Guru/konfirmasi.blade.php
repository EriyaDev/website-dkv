<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen bg-primary-color">
        <div class="p-10 rounded-xl shadow-lg bg-secondary-color w-[90%] sm:w-96 md:w-[420px]">
            <h1 class="page-title font-satoshi text-center"><span class="text-green-500">Pendaftaran akun
                    berhasil!</span> <br>
                Tunggu akunmu
                dikonfirmasi oleh admin ya!</h1>
            <div class="flex justify-center items-center mt-5">
                <a href="/logout" class="button-secondary font-satoshi">Kembali</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="mt-5 w-[90%] sm:w-96 md:w-[420px] bg-red-500 text-sm text-white text-center rounded-lg p-4">
                <span class="font-bold">
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
