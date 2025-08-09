@extends('layouts.app')
@section('title', 'DConten')
@section('content')

<div class="bg-white border-b border-gray-200 shadow-sm">
    <div class="px-4 lg:px-8 py-4">
        <!-- Breadcrumb -->
        <div class="flex items-center text-xs lg:text-sm text-gray-500 mb-4 overflow-x-auto whitespace-nowrap">
            <span class="flex items-center">
                📚 Course
            </span>
            <span class="mx-2">/</span>
            <span>Teknologi</span>
            <span class="mx-2">/</span>
            <span>Tutorial menggunakan figma</span>
        </div>

        <!-- Page Title -->
        <div class="flex items-start lg:items-center gap-2 lg:gap-4 mb-2">
            <a href="/course"><button class="text-gray-600 hover:text-gray-800 text-xl mt-1 lg:mt-0 flex-shrink-0">
                    ←
                </button></a>
            <div class="flex flex-col lg:flex-row lg:items-center gap-2 lg:gap-4 min-w-0 flex-1">
                <h1 class="text-lg lg:text-2xl font-semibold text-gray-900 break-words">
                    Tutorial menggunakan figma
                </h1>
                <span class="bg-indigo-500 text-white px-3 py-1 rounded-full text-xs font-medium self-start">
                    Teknologi
                </span>
            </div>
        </div>

        <!-- Course Info -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6 text-xs lg:text-sm text-gray-500">
            <div class="flex items-center gap-1">
                📖 Materi
            </div>
            <div class="flex items-center gap-1">
                🎓 Sekolah menengah atas
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
                Tutorial Menggunakan Figma
            </h2>
            <p class="text-gray-600 text-sm mb-4">
                20 September 2025 • Sekolah Menengah Atas
            </p>

            <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                Introduction
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non consectetur urna. Aliquam eu dui id
                ante
                tincidunt posuere nec in est. Aliquam accumsan eros in nisl facilisis maximus. Etiam faucibus maximus
                nulla at lobortis. Mauris aliquam, ipsum vitae tempor varius, metus ipsum pretium lectus, et ultrices
                lacus
                lectus id quam. Nunc vulputate feugiat orci, efficitur imperdiet ante molestie a. Nunc viverra orci
                pellentesque sem pulvinar fermentum. Pellentesque nec sodales sem, et scelerisque tortor. Aenean leo
                purus, interdum non ex placerat, lacinia tristique libero. Etiam mollis erat in risus tincidunt
                eleifend.
                Suspendisse potenti.
            </p>
        </div>

        <div>
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                Tutorial Menggunakan Figma
            </h3>
            <p class="text-gray-600 leading-relaxed mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non consectetur urna. Aliquam eu dui id
                ante
                tincidunt posuere nec in est. Aliquam accumsan eros in nisl facilisis maximus. Etiam faucibus maximus
                nulla at lobortis. Mauris aliquam, ipsum vitae tempor varius, metus ipsum pretium lectus, et ultrices
                lacus
                lectus id quam. Nunc vulputate feugiat orci, efficitur imperdiet ante molestie a. Nunc viverra orci
                pellentesque sem pulvinar fermentum. Pellentesque nec sodales sem, et scelerisque tortor. Aenean leo
                purus, interdum non ex placerat, lacinia tristique libero. Etiam mollis erat in risus tincidunt
                eleifend.
                Suspendisse potenti.
            </p>

            <p class="text-gray-600 leading-relaxed">
                Nulla venenatis tortor ligula, eu elementum nulla sodales sit amet. Etiam euismod tristique
                sollicitudin.
                Nulla efficitur eleifend eros, nec facilisis felis feugiat at. Sed feugiat ex lacus, vitae pulvinar mi
                mattis ac.
                Proin vulputate in ante et facilisis. Pellentesque ut tellus orci. Phasellus et sagittis libero. Sed
                cursus sit amet
                nulla quis auctor. Curabitur fringilla orci nec metus luctus porta. Suspendisse aliquet mi leo, ut
                sodales nisl
                venenatis eu. Suspendisse odio ipsum, dapibus maximus ante vel, pharetra rhoncus metus. In hac habitasse
                platea dictumst. Aliquam vehicula sed odio nec fringilla. Praesent erat risus, semper quis elit id,
                viverra
                dapibus odio.
            </p>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="w-full lg:w-80 bg-white rounded-lg shadow-sm p-4 lg:p-6 order-1 lg:order-2">
        <h3 class="font-semibold text-gray-900 mb-4">Konten</h3>

        <!-- Chapter 01 -->
        <div class="border border-gray-200 rounded-lg mb-3">
            <div class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="font-medium text-gray-900">01 : Materi</span>
                <span class="dropdown-arrow"></span>
            </div>
            <div class="px-4 pb-4">
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Introduction</span>
                </div>
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Biji kuda</span>
                </div>
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Mandi</span>
                </div>
            </div>
        </div>
        <div class="border border-gray-200 rounded-lg mb-3">
            <div class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="font-medium text-gray-900">01 : Materi</span>
                <span class="dropdown-arrow"></span>
            </div>
            <div class="px-4 pb-4">
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Introduction</span>
                </div>
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Biji kuda</span>
                </div>
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Mandi</span>
                </div>
            </div>
        </div>
        <div class="border border-gray-200 rounded-lg mb-3">
            <div class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="font-medium text-gray-900">01 : Materi</span>
                <span class="dropdown-arrow"></span>
            </div>
            <div class="px-4 pb-4">
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Introduction</span>
                </div>
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Biji kuda</span>
                </div>
                <div class="flex items-center gap-2 py-2 text-gray-600 cursor-pointer hover:text-indigo-600">
                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                    <span class="text-sm">Mandi</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<x-footer></x-footer>