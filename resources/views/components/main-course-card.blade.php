<div class="border border-black/10 bg-white p-3.5 rounded-2xl flex flex-col md:flex-row gap-2.5">
    <div class="rounded-xl">
        <img src="/cover-corse.png"
            class="rounded-xl aspect-video object-cover border border-black/20 w-full md:w-auto md:max-w-72" alt="">
    </div>
    <div class="flex flex-col gap-2.5 md:gap-0 justify-between">
        <h1 class="font-semibold text-[16px]">{{ $title }}</h1>
        <p class="text-black/30 hidden text-[13px] xl:block">
            {{ $description }}
        </p>
        <div class="text-[11px] flex items-center gap-1 font-semibold capitalize text-[#8B93FF]">
            <span>{{ $total }} materi</span>
            <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
            <span class="">{{ $type }}</span>
            <span class="size-1 bg-[#989898] inline-block rounded-full"></span>
            <span>{{ $jenjang }}</span>
        </div>
        <a href=""
            class="capitalize bg-[#5755FE] inline-block text-white text-center py-2 rounded-xl font-semibold w-full md:w-fit px-10">
            lihat
        </a>
    </div>
</div>