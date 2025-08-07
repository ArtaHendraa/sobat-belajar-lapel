@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="flex items-start bg-[#f5f7fb]">
        <!-- sidebar -->
        <x-sidebar />

        <section class=" w-full relative mb-10">
            <x-dashboard-header image="/PP.jpg" page="quiz" />

            <div class="py-5 md:py-10 px-5 md:px-10 flex flex-col xl:flex-row items-start">
                <div class="w-full">
                    <form action="" class="flex items-center w-full">
                        <div class="relative flex-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-gray-400 absolute top-1/2 left-4 -translate-y-1/2 pointer-events-none"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            <input type="text"
                                class="w-full border border-gray-300 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Search">
                        </div>

                        <button type="button" id="toggleButton"
                            class="ml-3 p-3 rounded-xl cursor-pointer border border-gray-300 hover:bg-gray-100 transition xl:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                            </svg>
                        </button>
                    </form>


                    <div class="mt-5 flex flex-col gap-5">
                        <h1 class="font-semibold -mb-2">10 Results</h1>
                        @foreach ($api as $id => $item)
                            <div
                                class="border border-black/10 bg-white p-3.5 rounded-2xl flex flex-col md:flex-row gap-2.5">
                                <div class="rounded-xl">
                                    <img src="/cover-corse.png"
                                        class="rounded-xl aspect-video object-cover border border-black/20 w-full md:w-auto md:max-w-72"
                                        alt="">
                                </div>
                                <div class="flex flex-col gap-2.5 md:gap-0 justify-between">
                                    <h1 class="font-semibold text-lg">{{ $item['title'] }}</h1>
                                    <p class="text-black/30 hidden xl:block">
                                        {{ $item['description'] }}</p>
                                    <div
                                        class="text-xs md:text-sm flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
                                        <span>{{ $item['total'] }} materi</span>
                                        <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                        <span class="">{{ $item['type'] }}</span>
                                        <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
                                        <span>{{ $item['jenjang'] }}</span>
                                    </div>
                                    <a href=""
                                        class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-full md:w-fit px-10">
                                        lihat
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <aside id="filter"
                    class="bg-white mt-5 mx-5 absolute top-32 inset-x-0  hidden md:block md:mt-0 md:sticky md:top-10 p-5 md:ml-10  md:w-1/2 border border-black/20 rounded-xl">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleButton');
            const filter = document.getElementById('filter');

            toggleBtn.addEventListener('click', () => {
                filter.classList.toggle('hidden');
            });
            toggleBtn.addEventListener('click', () => {
                document.body.classList.toggle('overflow-y-hidden');
            });
        });
    </script>
@endsection
