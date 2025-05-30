<nav class="w-[calc(100vw-320px)] ml-[320px] bg-secondary-color  fixed z-20 top-0 text-text-primary-color py-3 px-8">
    <div class="flex flex-row items-center justify-between w-full">

        <div class="flex flex-row gap-5 w-[70%] items-center">
            <button id="hamburger" onclick="toggleSidebar()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M5 8h22M5 16h22M5 24h22" />
                </svg>
            </button>

            <h1 class="text-sm text-text-primary-color font-medium"> {{ $slot }} </h1>


        </div>
        {{-- <div class="flex flex-row gap-3 items-center">
            <div class="w-6 h-6 bg-center bg-no-repeat bg-cover bg-notification"></div>
            <div class="border-l-2 border-inactive-color h-6"></div>
            <div class="flex flex-row gap-1 items-center"> --}}
        {{-- <img src="https://th.bing.com/th/id/OIP.IEF0FYoVv1T73pT9J23iFgHaHa?rs=1&pid=ImgDetMain" alt=""
                    class="w-8 h-8 rounded-full object-cover"> --}}
        {{-- <h1 class="text-sm text-text-primary-color font-medium"> {{ $slot }} </h1> --}}
        {{-- </div> --}}
        {{-- </div> --}}
    </div>
</nav>
