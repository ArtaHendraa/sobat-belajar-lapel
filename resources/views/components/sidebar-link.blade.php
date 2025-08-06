@props(['href', 'active' => false])

@php
    $classes = $active ? 'bg-[#5755FE]/15 text-[#5755FE] font-semibold' : 'opacity-50 hover:bg-[#5755FE]/15';
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => "flex items-center gap-3 text-base py-3 px-3 rounded-lg $classes",
    ]) }}>
    {{ $slot }}
</a>
