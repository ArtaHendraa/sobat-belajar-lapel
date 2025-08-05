@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<main class="flex items-start bg-[#f5f7fb]">
    <!-- sidebar -->
    <aside
        class="sticky left-0 top-0 h-screen w-full max-w-2xs bg-white border-r border-black/10 px-6 overflow-y-auto max-h-screen">
        <!-- Logo -->
        <header class="flex items-center gap-2 my-9">
            <img src="/sobat-belajar.svg" alt="">
            <h1 class="text-[#1674BE] text-xl capitalize font-bold">sobat belajar</h1>
        </header>

        <!-- Section: Article -->
        <main class="flex flex-col justify-between ">
            <div class="mb-6">
                <h2 class="text-base font-semibold text-gray-600 capitalize mb-4">
                    main menu
                </h2>
                <div class="flex flex-col gap-y-3">
                    <a href="#"
                        class="flex items-center gap-3 text-base  bg-[#5755FE]/15 py-3 px-3 rounded-lg text-[#5755FE]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="capitalize font-semibold">dashboard</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 text-base  hover:bg-[#5755FE]/15 py-3 px-3 rounded-lg opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>
                        <span class="capitalize">course</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 text-base  hover:bg-[#5755FE]/15 py-3 px-3 rounded-lg opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>
                        <span class="capitalize">quiz</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 text-base  hover:bg-[#5755FE]/15 py-3 px-3 rounded-lg opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                        <span class="capitalize">history</span>
                    </a>
                </div>
            </div>

            <div class="mt-[450px]">
                <h2 class="text-base font-semibold text-gray-600 capitalize mb-4">
                    settings
                </h2>
                <div class="flex flex-col gap-y-3">
                    <a href="#" class="flex items-center gap-3 text-base opacity-50 py-3 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        <span class="capitalize font-normal">dashboard</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 text-base opacity-50 py-3 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>

                        <span class="capitalize font-normal">log out</span>
                    </a>
                </div>
            </div>
        </main>
    </aside>

    <section class=" w-full">
        <nav class="flex items-center justify-between bg-white py-5 px-10">
            <h1 class="capitalize text-2xl font-semibold">dashboard</h1>
            <div>
                <img src="/pp.jpg" class="size-14 rounded-full" alt="">
            </div>
        </nav>

        <div class="px-10 mt-5 relative">
            <div class="bg-[#5755FE] text-white flex flex-col gap-2 items-center rounded-3xl py-20">
                <h1 class="text-5xl capitalize font-semibold">naikkan levelmu</h1>
                <p class="text-center font-light">
                    <span class="block">lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji</span>
                    <span class="block">meledaklorem ipsum dolor sitamet biji meledak</span>
                </p>
                <a href=""
                    class="text-black bg-white py-3 rounded-xl px-10 capitalize font-semibold mt-5 shadow-white">course</a>
            </div>
        </div>

        <div class="px-10">
            <h1 class="capitalize text-2xl mt-12 font-semibold">last course</h1>

            <div>
                <div class="border border-black/10 bg-white p-3.5 rounded-2xl">
                    <div class="rounded-xl">
                        <img src="/cover-corse.png" class="rounded-xl" alt="">
                    </div>
                    <h1>Tutorial menggunakan figma untuk pemula</h1>
                    <span class="capitalize">teknologi</span>
                    <div>
                        <span>14 materi</span>
                        <span>sekolah menengah atas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection