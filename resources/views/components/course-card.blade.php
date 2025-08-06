<div class="border border-black/10 bg-white p-3.5 rounded-2xl flex flex-col gap-2.5">
    <div class="rounded-xl">
        <img src="{{ $image }}" class="rounded-xl aspect-video object-cover border border-black/20" alt="">
    </div>
    <h1 class="font-semibold">{{ $title }}</h1>
    <span class="font-semibold capitalize text-[#8B93FF] text-sm">{{ $category }}</span>
    <div class="font-semibold text-sm text-[#989898] flex items-center gap-1 capitalize">
        <span>{{ $total }} materi</span>
        <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
        <span>{{ $level }}</span>
    </div>
    <a href="{{ $link }}"
        class="capitalize bg-[#5755FE] inline-block text-white w-full text-center py-3 rounded-xl font-semibold">
        lanjutkan
    </a>
</div>
