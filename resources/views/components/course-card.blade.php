@php
use Illuminate\Support\Str;
@endphp

<a href="{{ $link }}" class="block group">
    <div class="bg-white p-3 rounded-2xl flex flex-col gap-4 h-full border border-gray-200/80
                shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

        <div class="rounded-xl overflow-hidden">
            <img src="{{ $image }}"
                class="w-full aspect-video object-cover transition-transform duration-300 group-hover:scale-105"
                alt="Cover Kursus {{ $title }}">
        </div>

        <div class="flex flex-col gap-3 px-1 flex-grow">
            <span
                class="font-semibold capitalize text-[#5755FE] bg-[#5755FE]/10 text-xs px-2.5 py-1 rounded-full w-fit">
                {{ $category }}
            </span>

            <h1 class="font-bold text-gray-800 leading-snug group-hover:text-[#5755FE] transition-colors">
                {{ $title }}
            </h1>
            <h1 class="font-light text-gray-500 leading-snug">
                {{ Str::limit($description, 30) }}
            </h1>
        </div>

        <div class="px-1 mt-auto">

            <div
                class="mt-5 text-sm font-semibold text-[#5755FE] flex items-center gap-1.5
                        opacity-0 group-hover:opacity-100 transform -translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                <span>Belajar</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                </svg>
            </div>
        </div>
    </div>
</a>