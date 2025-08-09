<nav class="flex items-center justify-between bg-white py-3 md:py-2 px-5 md:px-10 border-b border-black/10">
    <h1 class="capitalize hidden md:block text-xl font-semibold">{{ $page }}</h1>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="size-7 md:hidden" id="openSidebar">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
    </svg>

    <div>
        <img src={{ $image }} class="size-10 md:size-10 rounded-full" alt="">
    </div>
</nav>