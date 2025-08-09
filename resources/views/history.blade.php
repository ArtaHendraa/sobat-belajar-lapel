@extends('layouts.app')
@section('title', 'Riwayat Belajar')
@section('content')

<main class="flex items-start bg-[#f5f7fb] min-h-screen">
    <x-sidebar />

    <section class="w-full relative pb-10">
        <x-dashboard-header image="/PP.jpg" page="history" />

        <div class="p-4 md:p-8">
            {{-- ---------------------------------------------------------------------- --}}
            {{-- KONTEN BARU: RINGKASAN AKTIVITAS                      --}}
            {{-- ---------------------------------------------------------------------- --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-gradient-to-br from-[#5755FE] to-[#8B93FF] text-white rounded-3xl p-8 md:p-12 overflow-hidden">
                    <h4 class="text-sm font-medium  mb-2">Total Kursus Diikuti</h4>
                    <p class="text-3xl font-bold ">12</p>
                </div>
            </div>

            <hr class="my-8">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Riwayat Belajar Anda</h2>
            </div>

            <div class="flex flex-col gap-4">
                @if (!empty($api))
                @foreach ($api as $id => $item)
                <div
                    class="bg-white p-4 rounded-2xl flex flex-col md:flex-row items-center gap-5 shadow-sm border border-gray-200/80 hover:shadow-md transition-shadow duration-300">
                    <img src="/cover-corse.png" class="w-full md:w-52 lg:w-64 rounded-xl aspect-video object-cover"
                        alt="Cover Kursus">

                    <div class="flex flex-col justify-between h-full w-full gap-3">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 mb-1.5">{{ $item['title'] }}</h3>
                            {{-- Metadata dengan ikon agar lebih menarik --}}
                            <div class="flex items-center gap-4 text-xs text-gray-500 font-medium">
                                <div class="flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h11A1.5 1.5 0 0 1 15 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 13.5zM2.5 2a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-11a.5.5 0 0 0-.5-.5zM3 4.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 7.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
                                    </svg>
                                    <span>{{ $item['total'] }} Materi</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.99 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16l-.01-16zM9 12H7V9h2zm4 0h-2V9h2zm4 0h-2V9h2z"
                                            opacity=".3" />
                                        <path fill="currentColor"
                                            d="m4 18h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v12H4zm3-1h2v3H7zm4 0h2v3h-2zm4 0h2v3h-2z" />
                                    </svg>
                                    <span>{{ $item['jenjang'] }}</span>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="capitalize bg-[#5755FE] text-white text-center py-2.5 rounded-lg font-semibold w-full md:w-fit px-8 mt-2 hover:bg-[#4a47e0] transition-colors">
                            Lihat Lagi
                        </a>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-span-full text-center py-20 bg-white rounded-2xl">
                    <p class="text-gray-500">Riwayat belajarmu masih kosong.</p>
                </div>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection