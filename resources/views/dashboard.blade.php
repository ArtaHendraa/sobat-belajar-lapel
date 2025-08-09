@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
{{-- ✔️ Pindahkan min-h-screen ke sini, dan hapus mb-20 yang tidak perlu --}}
<main class="flex items-start bg-[#f5f7fb] min-h-screen">
    <x-sidebar />

    <section class="w-full relative pb-10">
        <x-dashboard-header image="{{ $userData['avatar'] }}" page="dashboard" />

        <div class="px-4 md:px-8 mt-8">
            <div
                class="relative bg-gradient-to-br from-[#5755FE] to-[#8B93FF] text-white rounded-3xl p-8 md:p-12 overflow-hidden">
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full opacity-50"></div>
                <div class="absolute -bottom-12 -left-10 w-48 h-48 bg-white/10 rounded-full opacity-50"></div>

                <div class="relative z-10 flex flex-col gap-3">
                    <h3 class="text-xl md:text-2xl font-medium">Hallo, {{ $userData['name'] }}! 👋</h3>
                    <h1 class="text-2xl md:text-5xl font-bold !leading-tight tracking-tight max-w-xl">
                        Siap Naikkan Level Keterampilanmu?
                    </h1>
                    <p class="text-sm md:text-base font-light text-white/80 mt-2 max-w-xl">
                        Setiap kursus yang kamu selesaikan adalah satu langkah lebih dekat menuju impianmu. Teruslah
                        melangkah, kami di sini untukmu!
                    </p>
                    <a href="#"
                        class="text-black bg-white px-6 py-2.5 md:px-8 rounded-xl w-fit font-semibold mt-5 shadow-lg shadow-black/10 transform hover:scale-105 transition-transform duration-300">
                        Jelajahi Kursus
                    </a>
                </div>
            </div>
        </div>

        <div class="px-4 md:px-8 mt-12">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800">Lanjutkan Petualanganmu</h2>
                <a href="/history" class="text-sm font-medium text-[#5755FE] hover:underline">Lihat Semua</a>
            </div>

            {{-- item course --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @if (!empty($courses))
                @foreach ($courses as $id => $item)
                <x-course-card image="/cover-corse.png" title="{{ $item['title'] }}"
                    description="{{ $item['description'] }}" category="{{ $item['type'] }}" link="/content" />
                @endforeach
                @else
                {{-- Tampilan jika tidak ada kursus terakhir --}}
                <div class="col-span-full text-center py-10 bg-white rounded-2xl">
                    <p class="text-gray-500">Kamu belum memulai kursus apapun. Yuk, mulai petualangan pertamamu!</p>
                    <a href="#"
                        class="text-white bg-[#5755FE] px-5 py-2 rounded-lg inline-block mt-4 font-semibold">Cari
                        Kursus</a>
                </div>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection