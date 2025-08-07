@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <main class="flex items-start bg-[#f5f7fb]">
        <!-- sidebar -->
        <x-sidebar />
        <section class=" w-full relative mb-10">
            <x-dashboard-header image="/PP.jpg" page="dashboard" />
            <div class="px-5 md:px-10 mt-5 relative">
                <div class="bg-[#5755FE] text-white flex flex-col gap-2 items-center rounded-3xl py-10 md:py-20">
                    <h1 class="text-3xl md:text-5xl capitalize font-semibold text-center">naikkan levelmu</h1>
                    <p class="text-center font-light md:text-base text-xs hidden md:block md:max-w-xl">
                        lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor
                        sitamet biji meledak
                    </p>
                    <a href=""
                        class="text-black bg-white px-3 py-2 md:py-3 rounded-xl md:px-10 capitalize font-semibold mt-5 shadow-white">course</a>
                </div>
                <img src="/assets/dashboard-assets/left.png" alt="particle"
                    class="hidden md:block absolute top-10 left-52 md:left-36">
                <img src="/assets/dashboard-assets/right.png" alt="particle"
                    class="hidden md:block absolute top-10 right-52 md:right-36">
            </div>
            <div class="px-5 md:px-10">
                <h1 class="capitalize text-2xl mt-12 mb-5 font-semibold">last course</h1>
                {{-- item course --}}
                <div class="flex flex-wrap md:grid md:grid-cols-4 gap-5">
                    @foreach ($api as $id => $item)
                        <x-course-card image="/cover-corse.png" title="{{ $item['title'] }}" category="{{ $item['type'] }}"
                            total="{{ $item['total'] }}" level="{{ $item['jenjang'] }}" link="/kursus/figma" />
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
