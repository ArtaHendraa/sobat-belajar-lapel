@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<main class="flex items-start min-h-screen">
    <x-sidebar></x-sidebar>
    <div class="flex flex-col h-screen bg-[#f5f7fb] w-full">

        <x-dashboard-header image="/PP.jpg" page="Partner" />

        <main class="flex-grow flex items-center justify-center">
            <h1 class="text-5xl font-medium text-blue-500">Halo, Putu</h1>
        </main>

        <footer class="w-full p-4 pb-8">
            <div class="max-w-3xl mx-auto">
                <div class="relative">
                    <input type="text" placeholder="Tanyakan sesuatu"
                        class="w-full py-4 pl-6 pr-16 text-md bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-md transition-shadow" />
                    <button
                        class="absolute rotate-90 right-3 top-1/2 -translate-y-1/2 w-10 h-10 bg-slate-200 hover:bg-slate-300 rounded-full flex items-center justify-center transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-600" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                    </button>
                </div>
            </div>
        </footer>

    </div>
</main>
@endsection