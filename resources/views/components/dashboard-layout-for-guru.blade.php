<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwalguru.id - Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />
    @vite('resources/css/app.css')
</head>

<body class="font-satoshi bg-primary-color">
    {{-- Sidebar --}}
    <aside class="w-80 h-screen overflow-y-auto fixed left-0 top-0 px-8 py-10 bg-secondary-color z-50">
        <div>
            <div>
                {{-- <img src="{{ asset('assets/images/logo/AbsenIn.svg') }}" alt="" class="mx-auto"> --}}
                {{-- <img src="https://preview.redd.it/dapet-thr-dari-rdat-v0-isx6gv31swsc1.jpeg?auto=webp&s=5e50c4f78abfd7768e9b4f01e8e4f3f27d47c7e4"
                    alt="" class="mx-auto"> --}}
                <img src="{{ asset('logo.png') }}" alt="" class="w-24 h-24 object-contain mx-auto mb-1">

            </div>

            <div class="pt-10">
                <ul class="flex flex-col gap-3">
                    <x-nav-link href="/dashboard" :active="request()->is('/dashboard*')"><x-slot:svg><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1"
                                    d="M8.557 2.75H4.682A1.93 1.93 0 0 0 2.75 4.682v3.875a1.94 1.94 0 0 0 1.932 1.942h3.875a1.94 1.94 0 0 0 1.942-1.942V4.682A1.94 1.94 0 0 0 8.557 2.75m10.761 0h-3.875a1.94 1.94 0 0 0-1.942 1.932v3.875a1.943 1.943 0 0 0 1.942 1.942h3.875a1.94 1.94 0 0 0 1.932-1.942V4.682a1.93 1.93 0 0 0-1.932-1.932m0 10.75h-3.875a1.94 1.94 0 0 0-1.942 1.933v3.875a1.94 1.94 0 0 0 1.942 1.942h3.875a1.94 1.94 0 0 0 1.932-1.942v-3.875a1.93 1.93 0 0 0-1.932-1.932M8.557 13.5H4.682a1.943 1.943 0 0 0-1.932 1.943v3.875a1.93 1.93 0 0 0 1.932 1.932h3.875a1.94 1.94 0 0 0 1.942-1.932v-3.875a1.94 1.94 0 0 0-1.942-1.942" />
                            </svg></x-slot:svg> Dashboard
                    </x-nav-link>
                    <x-nav-link href="/jadwal" :active="request()->is('/jadwal*')"><x-slot:svg><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18.436 20.937H5.562a2.5 2.5 0 0 1-2.5-2.5V5.563a2.5 2.5 0 0 1 2.5-2.5h12.874a2.5 2.5 0 0 1 2.5 2.5v12.874a2.5 2.5 0 0 1-2.5 2.5M5.562 4.063a1.5 1.5 0 0 0-1.5 1.5v12.874a1.5 1.5 0 0 0 1.5 1.5h12.874a1.5 1.5 0 0 0 1.5-1.5V5.563a1.5 1.5 0 0 0-1.5-1.5Z" />
                                <path fill="currentColor"
                                    d="M6.544 8.283a.52.52 0 0 1-.353-.147a.5.5 0 0 1 0-.707a.5.5 0 0 1 .353-.146H7.55a.52.52 0 0 1 .353.146a.5.5 0 0 1 .147.354a.5.5 0 0 1-.5.5Zm0 4.217a.52.52 0 0 1-.353-.146a.5.5 0 0 1 0-.708a.52.52 0 0 1 .353-.146H7.55a.52.52 0 0 1 .353.146a.5.5 0 0 1 0 .708a.52.52 0 0 1-.353.146Zm0 4.22a.52.52 0 0 1-.353-.147a.5.5 0 0 1 0-.707a.52.52 0 0 1 .353-.146H7.55a.52.52 0 0 1 .353.146a.5.5 0 0 1 .147.354a.5.5 0 0 1-.5.5Zm4.01-8.439a.5.5 0 0 1 0-1h6.9a.5.5 0 0 1 0 1Zm0 4.219a.5.5 0 0 1 0-1h6.9a.5.5 0 0 1 0 1Zm0 4.218a.5.5 0 0 1 0-1h6.9a.5.5 0 0 1 0 1Z" />
                            </svg></x-slot:svg> Jadwal Mengajar
                    </x-nav-link>



                </ul>

                <ul class="mt-28">
                    <form id="logoutForm" action="{{ url('/logout') }}">
                        @csrf
                        <x-nav-link href="javascript:void(0);" :active="request()->is('/')"
                            onclick="document.getElementById('logoutForm').submit();">
                            <x-slot:svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h5.903q.214 0 .357.143t.143.357t-.143.357t-.357.143H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h5.904q.214 0 .357.143t.143.357t-.143.357t-.357.143zm12.444-7.5H9.692q-.213 0-.356-.143T9.192 12t.143-.357t.357-.143h8.368l-1.971-1.971q-.141-.14-.15-.338q-.01-.199.15-.364q.159-.165.353-.168q.195-.003.36.162l2.614 2.613q.242.243.242.566t-.243.566l-2.613 2.613q-.146.146-.347.153t-.366-.159q-.16-.165-.157-.357t.162-.35z" />
                                </svg>
                            </x-slot:svg>
                            Keluar
                        </x-nav-link>
                    </form>
                </ul>
                <!-- <ul class="mt-28">
                    <x-nav-link href="/" :active="request()->is('/')"><x-slot:svg><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h5.903q.214 0 .357.143t.143.357t-.143.357t-.357.143H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h5.904q.214 0 .357.143t.143.357t-.143.357t-.357.143zm12.444-7.5H9.692q-.213 0-.356-.143T9.192 12t.143-.357t.357-.143h8.368l-1.971-1.971q-.141-.14-.15-.338q-.01-.199.15-.364q.159-.165.353-.168q.195-.003.36.162l2.614 2.613q.242.243.242.566t-.243.566l-2.613 2.613q-.146.146-.347.153t-.366-.159q-.16-.165-.157-.357t.162-.35z" />
                </svg></x-slot:svg> Keluar</x-nav-link>
                </ul> -->
            </div>
        </div>
    </aside>

    {{-- Navbar --}}
    <x-nav>Guru</x-nav>


    <main class="xl:w-[calc(100vw - 320px)] xl:ml-[320px] h-screen bg-primary-color">
        <div class="px-14 py-24">
            {{ $slot }}
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script src="{{ asset('scripts/dropdown.js') }}"></script>
    <script src="{{ asset('scripts/responsive-sidebar.js') }}"></script>
    <script src="{{ asset('scripts/script.js') }}"></script>
    <script src="{{ asset('scripts/sweetalert.js') }}"></script>

</body>

</html>
