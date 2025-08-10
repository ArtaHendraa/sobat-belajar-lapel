@extends('layouts.app')

@section('title', 'History')

@section('content')
<main class="flex items-start bg-[#f5f7fb] min-h-screen">
    <x-sidebar />

    <section class="w-full relative pb-10">
        <x-dashboard-header image="{{ session('user_avatar') }}" page="History" />

        <div class="w-full p-4 md:p-8">
            {{-- Kategori --}}
            <div class="mt-10">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Kategori</h3>
                <div class="flex items-center gap-3 overflow-x-auto pb-3">
                    @foreach ($histories->pluck('course.type')->unique() as $type)
                    <a href="{{ route('course.search') }}?search={{ $type }}"
                        class="px-5 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg text-sm font-semibold whitespace-nowrap hover:bg-[#5755FE] hover:text-white">
                        {{ $type }}
                    </a>
                    @endforeach
                </div>
            </div>

            <hr class="my-8">

            {{-- Header Semua Kursus --}}
            <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Semua Kursus</h2>
            </div>

            {{-- List Kursus --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @if ($histories->isNotEmpty())
                @foreach ($histories as $item)
                @if ($item->course)
                <x-course-card image="{{ $item->course->image }}" title="{{ $item->course->title }}"
                    description="{{ $item->course->description }}" category="{{ $item->course->type }}"
                    link="/content/{{ $item->course->id }}/materi/{{ $item->course->id + 1 }}"
                    :progress="rand(10,90)" />
                @endif
                @endforeach
                @else
                <div class="col-span-full text-center py-20 bg-white rounded-2xl">
                    <p class="text-gray-500">Kamu belum ada ambil kursus</p>
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

        if (toggleBtn && filter) {
            toggleBtn.addEventListener('click', () => {
                filter.classList.toggle('hidden');
                document.body.classList.toggle('overflow-y-hidden');
            });
        }
    });
</script>
@endsection