@php

$sosmed = [
    "1" => [
        "title" => "Instagram",
        "url" => "#",
        "icon" => <<<SVG
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                    </svg>
                    SVG
    ],
    "2" => [
        "title" => "You Tube",
        "url" => "#",
        "icon" => <<<SVG
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73"/></svg>
                    SVG
    ],
    "3" => [
        "title" => "X",
        "url" => "#",
        "icon" => <<<SVG
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><g fill="currentColor"><path d="M1 2h2.5L3.5 2h-2.5zM5.5 2h2.5L7.2 2h-2.5z"><animate fill="freeze" attributeName="d" dur="0.4s" values="M1 2h2.5L3.5 2h-2.5zM5.5 2h2.5L7.2 2h-2.5z;M1 2h2.5L18.5 22h-2.5zM5.5 2h2.5L23 22h-2.5z"/></path><path d="M3 2h5v0h-5zM16 22h5v0h-5z"><animate fill="freeze" attributeName="d" begin="0.4s" dur="0.4s" values="M3 2h5v0h-5zM16 22h5v0h-5z;M3 2h5v2h-5zM16 22h5v-2h-5z"/></path><path d="M18.5 2h3.5L22 2h-3.5z"><animate fill="freeze" attributeName="d" begin="0.5s" dur="0.4s" values="M18.5 2h3.5L22 2h-3.5z;M18.5 2h3.5L5 22h-3.5z"/></path></g></svg>
                    SVG
    ],
    "4" => [
        "title" => "TikTok",
        "url" => "#",
        "icon" => <<<SVG
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M16.6 5.82s.51.5 0 0A4.28 4.28 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48"/></svg>
                    SVG
    ]
]


@endphp
 
 <!-- footer -->
    <footer class="footer mt-24 h-full bg-[#263238]">
        <div class="logo mx-auto max-w-7xl">
            <img class="w-32 -ml-5 lg:-ml-8" src="/assets/soba-belajar.png" alt="">
        </div>
        <div class="footer-container mx-auto max-w-7xl">
            <div class="grid p-2 md:grid-cols-2 lg:grid-cols-4 gap-y-5">
                <div class="sobat-belajar">
                    <div class="desc">
                        <h1 class="text-white font-bold text-2xl">Tentang Kami</h1>
                        <div class=" hidden lg:block w-1/2 h-[2px] my-2 bg-white"></div>
                        <p class="text-white lg:text-xl  mt-2 lg:mt-0">Belajar sepuasnya, no bayar-bayar club</p>
                    </div>
                    
                </div>
                <div class="sosmed">
                    <h1 class="text-white font-bold text-2xl">Ikuti Kami</h1>
                    <div class=" hidden lg:block w-1/2 h-[2px] my-2 bg-white"></div>
                    <div class="sosmed flex flex-col gap-2 mt-2 lg:mt-0">
                        @foreach ($sosmed as $data)
                        <div class="instagram relative group">
                            <div class="icon text-[#989898] group-hover:text-white transition-all duration-300 ease-in-out">
                                {!! $data['icon'] !!}
                            </div>
                            <div class="absolute top-0 left-10  opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                <p class="text-white">{{ $data['title'] }}</p>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
                <div class="nav-link flex flex-col">
                    <h1 class="text-white font-bold text-2xl">Menu</h1>
                    <div class="hidden lg:block w-1/2 h-[2px] my-2 bg-white"></div>
                    <div class="footer-link mt-2 lg:mt-0">
                        <div class="nav-link flex flex-col ">
                            <a class="text-[#989898] lg:text-xl hover:text-white" href="#">Kursus</a>
                            <a class="text-[#989898] lg:text-xl hover:text-white" href="#">Program</a>
                            <a class="text-[#989898] lg:text-xl hover:text-white" href="#">Testimoni</a>
                        </div>
                    </div>
                </div>
                <div class="kontak">
                    <h1 class="text-white font-bold text-2xl">Kontak kami</h1>
                    <div class="hidden lg:block w-1/2 h-[2px] my-2 bg-white"></div>
                    <div class="kontak-kami flex flex-col gap-2  mt-2 lg:mt-0">
                        <div class="lokasi flex gap-2 text-[#989898] hover:text-white transition-all duration-300 ease-in-out lg:text-xl cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="12" cy="9.5" r="1.5" fill="currentColor"/><path fill="currentColor" d="M12 2a8 8 0 0 0-8 7.92c0 5.48 7.05 11.58 7.35 11.84a1 1 0 0 0 1.3 0C13 21.5 20 15.4 20 9.92A8 8 0 0 0 12 2m0 11a3.5 3.5 0 1 1 3.5-3.5A3.5 3.5 0 0 1 12 13"/></svg>
                            <p > Indonesia, Online Class</p>
                        </div>
                        <div class="email flex gap-2 text-[#989898] hover:text-white transition-all duration-300 ease-in-out lg:text-xl cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z"/></svg>
                            <p> sobatbelajar@email.com</p>
                        </div>
                        <div class="nomor flex gap-2 text-[#989898] hover:text-white transition-all duration-300 ease-in-out lg:text-xl cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z"/></svg>
                            <p> +62 812-3456-7890</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="line h-[2px] bg-white mx-auto max-w-7xl mt-8"></div>
        <div class="copyright mx-auto max-w-7xl py-8">
            <p class="text-center font-semibold text-[#989898]">Copyright Sobat Belajar © 2025</p>
        </div>
    </footer>
    <!-- end footer -->
