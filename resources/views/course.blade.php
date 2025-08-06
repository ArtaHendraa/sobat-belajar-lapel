@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="flex items-start bg-[#f5f7fb]">
        <!-- sidebar -->
        <x-sidebar />

        <section class=" w-full relative mb-10">
            <nav class="flex items-center justify-between bg-white py-5 px-10">
                <h1 class="capitalize text-2xl font-semibold">course</h1>
                <div>
                    <img src="/pp.jpg" class="size-14 rounded-full" alt="">
                </div>
            </nav>

            <div class="py-10 px-10 flex items-start">
                <div class="w-full">
                    <form action="" class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 absolute top-1/2 transform -translate-y-1/2 left-5 opacity-30">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>

                        <input type="text" class="border border-black/20 rounded-xl py-3 w-full px-14 focus:outline-none"
                            placeholder="Search">
                    </form>

                    <div class="mt-5 flex flex-col gap-5">
                        <h1 class="font-semibold -mb-2">10 Results</h1>

                        <div class="border border-black/10 bg-white p-3.5 rounded-2xl flex gap-2.5">
                            <div class="rounded-xl">
                                <img src="/cover-corse.png"
                                    class="rounded-xl aspect-video object-cover border border-black/20 max-w-72"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between">
                                <h1 class="font-semibold text-lg">Tutorial menggunakan figma untuk pemula</h1>
                                <p class="text-black/30">
                                    lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet
                                    biji meledaklorem ipsum
                                    dolor sit amet biji meledak...</p>
                                <div class="text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                    <span>14 materi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span class="">teknologi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span>sekolah menengah atas</span>
                                </div>
                                <a href=""
                                    class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-fit px-10">
                                    lihat
                                </a>
                            </div>
                        </div>

                        <div class="border border-black/10 bg-white p-3.5 rounded-2xl flex gap-2.5">
                            <div class="rounded-xl">
                                <img src="/cover-corse.png"
                                    class="rounded-xl aspect-video object-cover border border-black/20 max-w-72"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between">
                                <h1 class="font-semibold text-lg">Tutorial menggunakan figma untuk pemula</h1>
                                <p class="text-black/30">
                                    lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet
                                    biji meledaklorem ipsum
                                    dolor sit amet biji meledak...</p>
                                <div class="text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                    <span>14 materi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span class="">teknologi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span>sekolah menengah atas</span>
                                </div>
                                <a href=""
                                    class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-fit px-10">
                                    lihat
                                </a>
                            </div>
                        </div>

                        <div class="border border-black/10 bg-white p-3.5 rounded-2xl flex gap-2.5">
                            <div class="rounded-xl">
                                <img src="/cover-corse.png"
                                    class="rounded-xl aspect-video object-cover border border-black/20 max-w-72"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between">
                                <h1 class="font-semibold text-lg">Tutorial menggunakan figma untuk pemula</h1>
                                <p class="text-black/30">
                                    lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet
                                    biji meledaklorem ipsum
                                    dolor sit amet biji meledak...</p>
                                <div class="text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                    <span>14 materi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span class="">teknologi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span>sekolah menengah atas</span>
                                </div>
                                <a href=""
                                    class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-fit px-10">
                                    lihat
                                </a>
                            </div>
                        </div>

                        <div class="border border-black/10 bg-white p-3.5 rounded-2xl flex gap-2.5">
                            <div class="rounded-xl">
                                <img src="/cover-corse.png"
                                    class="rounded-xl aspect-video object-cover border border-black/20 max-w-72"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between">
                                <h1 class="font-semibold text-lg">Tutorial menggunakan figma untuk pemula</h1>
                                <p class="text-black/30">
                                    lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet
                                    biji meledaklorem ipsum
                                    dolor sit amet biji meledak...</p>
                                <div class="text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                    <span>14 materi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span class="">teknologi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span>sekolah menengah atas</span>
                                </div>
                                <a href=""
                                    class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-fit px-10">
                                    lihat
                                </a>
                            </div>
                        </div>

                        <div class="border border-black/10 bg-white p-3.5 rounded-2xl flex gap-2.5">
                            <div class="rounded-xl">
                                <img src="/cover-corse.png"
                                    class="rounded-xl aspect-video object-cover border border-black/20 max-w-72"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between">
                                <h1 class="font-semibold text-lg">Tutorial menggunakan figma untuk pemula</h1>
                                <p class="text-black/30">
                                    lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet
                                    biji meledaklorem ipsum
                                    dolor sit amet biji meledak...</p>
                                <div class="text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                    <span>14 materi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span class="">teknologi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span>sekolah menengah atas</span>
                                </div>
                                <a href=""
                                    class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-fit px-10">
                                    lihat
                                </a>
                            </div>
                        </div>

                        <div class="border border-black/10 bg-white p-3.5 rounded-2xl flex gap-2.5">
                            <div class="rounded-xl">
                                <img src="/cover-corse.png"
                                    class="rounded-xl aspect-video object-cover border border-black/20 max-w-72"
                                    alt="">
                            </div>
                            <div class="flex flex-col justify-between">
                                <h1 class="font-semibold text-lg">Tutorial menggunakan figma untuk pemula</h1>
                                <p class="text-black/30">
                                    lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet
                                    biji meledaklorem ipsum
                                    dolor sit amet biji meledak...</p>
                                <div class="text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                    <span>14 materi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span class="">teknologi</span>
                                    <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                    <span>sekolah menengah atas</span>
                                </div>
                                <a href=""
                                    class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-fit px-10">
                                    lihat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="bg-white sticky top-10 p-5 ml-10 w-1/2 border border-black/20 rounded-xl">
                    <h1 class="capitalize text-3xl font-semibold">filter</h1>

                    <h2 class="capitalize text-xl font-semibold mt-5">tingkatan</h2>
                    <form class="mx-5 mt-2.5">
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Sekolah Dasar (SD)</h2>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Sekolah Menengah Pertama (SMP)</h2>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Sekolah Menengah Atas (SMA)</h2>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Umum</h2>
                        </div>
                    </form>

                    <h2 class="capitalize text-xl font-semibold mt-5">kategori</h2>
                    <form class="mx-5 mt-2.5">
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Teknologi</h2>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Umum</h2>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Terbaru</h2>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox">
                            <h2>Matematika</h2>
                        </div>
                    </form>
                </aside>
            </div>
        </section>


    </main>
@endsection
