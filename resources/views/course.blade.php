@extends('layouts.app')

@section('title', 'Course')

@section('content')
<main class="flex items-start bg-[#f5f7fb] min-h-screen">
    <x-sidebar />

    <section class="w-full relative pb-10">
        <x-dashboard-header image="{{session('user_avatar')}}" page="course" />

        <div class="w-full p-4 md:p-8">
            <div class="relative w-full max-w-2xl mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-gray-400 absolute top-1/2 left-4 -translate-y-1/2" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="text"
                    class="w-full border border-gray-300 bg-white rounded-xl py-3 pl-11 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-[#5755FE]"
                    placeholder="Cari kursus favoritmu...">
            </div>
            <div class="mt-10">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Kategori</h3>
                <div class="flex items-center gap-3 overflow-x-auto pb-3">
                    {{-- Tombol kategori bisa dari data dinamis atau hardcode --}}
                    <a href="#"
                        class="px-5 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-[#5755FE] text-white">Semua</a>
                    <a href="#"
                        class="px-5 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 transition">UI/UX
                        Design</a>
                    <a href="#"
                        class="px-5 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 transition">Web
                        Development</a>
                    <a href="#"
                        class="px-5 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 transition">Marketing</a>
                    <a href="#"
                        class="px-5 py-2 rounded-lg text-sm font-semibold whitespace-nowrap bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 transition">Data
                        Science</a>
                </div>
            </div>

            <hr class="my-8">

            <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Semua Kursus</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @if (!empty($courses))
                @php
                $id = 0;
                @endphp
                @foreach ($courses as $id => $item)
                <x-course-card image="{{$item['image']}}" title="{{ $item['title'] }}"
                    description="{{ $item['description'] }}" category="{{ $item['type'] }}"
                    link="/content/{{ $item['id'] }}/materi/{{ $id+1 }}" :progress="rand(10,90)" />
                @endforeach
                @else
                <div class="col-span-full text-center py-20 bg-white rounded-2xl">
                    <p class="text-gray-500">Oops! Kursus tidak ditemukan.</p>
                </div>
                @endif
            </div>
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