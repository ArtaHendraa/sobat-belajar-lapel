@extends('layouts.app')
@section('title', 'DConten')
@section('content')
@php

use App\Models\MaterialContent;
@endphp
<div class="bg-white border-b border-gray-200 shadow-sm">
    <div class="px-4 lg:px-8 py-4">
        <!-- Breadcrumb -->
        <div class="flex items-center text-xs lg:text-sm text-gray-500 mb-4 overflow-x-auto whitespace-nowrap">
            <span class="flex items-center">
                Course
            </span>
            <span class="mx-2">/</span>
            <span>{{$course['type']}}</span>
            <span class="mx-2">/</span>
            <span>{{$course['title']}}</span>
        </div>

        <!-- Page Title -->
        <div class="flex items-start lg:items-center gap-2 lg:gap-4 mb-2">
            <a href="/course"><button
                    class="text-gray-600 hover:text-gray-800 font-bold text-xl mt-1 lg:mt-0 flex-shrink-0">
                    ←
                </button></a>
            <div class="flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-4 min-w-0 flex-1">
                <h1 class="text-lg lg:text-2xl font-semibold text-gray-900 break-words">
                    {{$course['title']}}
                </h1>
                <span class="bg-indigo-500 text-white px-3 py-1 rounded-full text-xs font-medium self-start">
                    {{$course['type']}}
                </span>
            </div>
        </div>

    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-4 lg:gap-8 p-4 lg:p-8">
    <!-- Content Area -->
    <div class="flex-1 bg-white rounded-lg p-4 lg:p-8 order-2 lg:order-1">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                {{$course['title']}}
            </h2>
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                {{ $course['type'] }}
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ $course['description'] }}
            </p>
        </div>

        <div>
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                {{ $content['title'] }}
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ $content['content'] }}
            </p>

        </div>
    </div>

    <!-- Sidebar -->
    <div class="w-full lg:w-80 bg-white rounded-lg shadow-sm p-4 lg:p-6 order-1 lg:order-2">
        <h3 class="font-semibold text-gray-900 mb-4">Konten</h3>

        <!-- Chapter 01 -->
        @foreach ($materials as $material)
        <div class="border border-gray-200 rounded-lg mb-3">
            <div class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="font-medium text-gray-900">{{ $material['title'] }}</span>
                <span class="dropdown-arrow"></span>
            </div>
            @php

            $content = MaterialContent::where('material_id', $material['id'])->get();
            @endphp
            <div class="px-4 pb-4">
                @foreach ($content as $data)
                <a href="/content/{{ $course['id'] }}/materi/{{ $data['id'] }}">
                    <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                        <span class="text-sm">{{ $data['title'] }}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endforeach

    </div>
</div>

<!-- Footer -->
<x-footer></x-footer>