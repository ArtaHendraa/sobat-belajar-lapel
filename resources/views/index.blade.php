<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOBAT BELAJAR - Buka Potensi Tak Terbatas</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <style>
    .text-gradient {
        background: linear-gradient(90deg, #5755FE, #FF71CD);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="container mx-auto max-w-7xl px-4">
        <header x-data="{ isOpen: false }" class="relative bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4">
                <div class="header py-2">
                    <div class="navbar grid grid-cols-2 md:grid-cols-3 items-center">

                        <div class="logo col-span-1">
                            <a href="/">
                                <img src="/assets/soba-belajar.png" alt="Sobat Belajar Logo" class="logo-web w-24">
                            </a>
                        </div>

                        <div
                            class="nav-link hidden md:flex col-span-1 items-center justify-center gap-8 font-medium text-gray-600">
                            <a href="#" class="hover:text-[#5755FE] transition-colors">Kursus</a>
                            <a href="#" class="hover:text-[#5755FE] transition-colors">Program</a>
                            <a href="#" class="hover:text-[#5755FE] transition-colors">Testimoni</a>
                        </div>

                        <div class="hidden md:flex col-span-1 justify-end">
                            <a href="{{ url('/auth/redirect/google') }}"
                                class="flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm transition-all hover:shadow-md hover:bg-gray-100">
                                <img src="/assets/google.svg" alt="Google Logo" class="google-logo w-5">
                                <span>Login with Google</span>
                            </a>
                        </div>

                        <div class="md:hidden flex justify-end">
                            <button @click="isOpen = !isOpen" aria-label="Buka Menu"
                                class="p-2 rounded-md text-gray-600 hover:bg-gray-100 hover:text-[#5755FE] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#5755FE]">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
                @click.away="isOpen = false"
                class="md:hidden absolute top-full left-0 w-full bg-white shadow-lg rounded-b-lg z-50">
                <div class="px-5 pt-2 pb-5 flex flex-col space-y-3">
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#5755FE] hover:bg-gray-50">Kursus</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#5755FE] hover:bg-gray-50">Program</a>
                    <a href="#"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#5755FE] hover:bg-gray-50">Testimoni</a>

                    <hr class="my-3">

                    <a href="{{ url('/auth/redirect/google') }}"
                        class="flex w-full items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm transition-all hover:shadow-md hover:bg-gray-100">
                        <img src="/assets/google.svg" alt="Google Logo" class="google-logo w-5">
                        <span>Login with Google</span>
                    </a>
                </div>
            </div>
        </header>
        <main>
            <section class="hero-section grid grid-cols-1 lg:grid-cols-2 items-center gap-12 py-12 md:py-20">
                <div class="headline flex flex-col gap-6 md:-mt-15 text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold !leading-tight tracking-tight">
                        Buka Potensi
                        <span class="text-gradient">Tak Terbatas</span>
                        Bersama Kami.
                    </h1>
                    <p class="text-lg md:text-xl text-gray-500">
                        Platform belajar modern, 100% gratis, dan dirancang khusus untuk Generasi Z yang haus ilmu.
                        Tanpa bayar, tanpa ribet.
                    </p>
                    <div class="flex gap-4 justify-center lg:justify-start mt-4">
                        <button
                            class="px-8 py-3 rounded-lg bg-[#5755FE] text-white text-lg font-semibold cursor-pointer shadow-lg shadow-[#5755FE]/30 hover:bg-[#4341d9] transform hover:-translate-y-1 transition-all duration-300 ease-in-out">
                            Jelajahi Kursus
                        </button>
                    </div>
                </div>
                <div class="image-grid hidden lg:grid grid-cols-2 gap-4">
                    <img src="/assets/hero-1.png" alt="Siswa sedang belajar"
                        class="rounded-2xl shadow-xl transform hover:scale-105 transition-transform duration-300 aspect-square object-cover">
                    <img src="/assets/hero-1.png" alt="Diskusi kelompok"
                        class="rounded-2xl shadow-xl transform hover:scale-105 transition-transform duration-300 aspect-square object-cover mt-8">
                    <img src="/assets/hero-1.png" alt="Coding di laptop"
                        class="rounded-2xl shadow-xl transform hover:scale-105 transition-transform duration-300 aspect-square object-cover">
                    <img src="/assets/hero-1.png" alt="Presentasi di depan kelas"
                        class="rounded-2xl shadow-xl transform hover:scale-105 transition-transform duration-300 aspect-square object-cover mt-8">
                </div>
            </section>
            <section class="program my-20">
                <div
                    class="rounded-3xl bg-gradient-to-br from-[#6a68ff] to-[#5755FE] w-full p-8 md:p-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 shadow-2xl shadow-[#5755FE]/20">
                    @foreach ($data['program'] as $program)
                    <div class="program-card flex flex-col gap-4 text-white/90">
                        <h3 class="text-2xl font-bold text-white">{{ $program['title'] }}</h3>
                        <p class="text-white/80">{{ $program['deskripsi'] }}</p>
                    </div>
                    @endforeach
                    <div class="program-card flex flex-col gap-4 text-white/90">
                        <h3 class="text-2xl font-bold text-white">Standar Industri</h3>
                        <p class="text-white/80">Materi disusun oleh para ahli, relevan dengan kebutuhan industri masa
                            kini.</p>
                    </div>
                </div>
            </section>
            <section class="why-us grid lg:grid-cols-2 gap-12 items-center my-20 md:my-28">
                <div class="text-content">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-5">Kenapa Harus <span class="text-gradient">Sobat
                            Belajar?</span></h2>
                    <p class="text-gray-600 lg:text-lg my-4">Kami percaya pendidikan berkualitas harus bisa diakses
                        siapa saja. Cukup login dengan akun Google, dan ribuan materi siap menantimu. Gratis selamanya.
                    </p>
                    <ul class="list-none space-y-3 mt-6">
                        <li class="flex items-center gap-3"><span
                                class="bg-[#8B93FF]/20 text-[#5755FE] rounded-full p-1">✔️</span> Akses Penuh Tanpa
                            Biaya Langganan.</li>
                        <li class="flex items-center gap-3"><span
                                class="bg-[#8B93FF]/20 text-[#5755FE] rounded-full p-1">✔️</span> Kurikulum Fleksibel
                            untuk Self-Learning.</li>
                        <li class="flex items-center gap-3"><span
                                class="bg-[#8B93FF]/20 text-[#5755FE] rounded-full p-1">✔️</span> Platform Ringan,
                            Belajar di Mana Saja.</li>
                    </ul>
                </div>
                <div class="img-container col-span-1 flex justify-center">
                    <img class="rounded-2xl shadow-xl w-full max-w-md" src="/assets/apalah.png"
                        alt="Dashboard Sobat Belajar">
                </div>
            </section>
            <section class="container-materi-unggulan my-20 md:my-28">
                <h2 class="text-center font-extrabold text-4xl md:text-5xl mb-4">Kursus Paling <span
                        class="text-gradient">Populer</span></h2>
                <p class="text-center text-lg text-gray-500 mb-12">Dipilih dan dicintai oleh ribuan sobat lainnya.</p>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($data['materi-unggulan'] as $materi)
                    <div
                        class="card-materi bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 group">
                        <img class="w-full h-48 object-cover" src="{{ $materi['img'] }}" alt="{{ $materi['title'] }}">
                        <div class="p-6 flex flex-col gap-4">
                            <h3 class="font-bold text-xl h-14">{{ $materi['title'] }}</h3>
                            <p class="text-gray-600 text-sm flex-grow h-20">{{ Str::limit($materi['deskripsi'], 100) }}
                            </p>
                            <button
                                class="w-full mt-4 bg-[#5755FE] text-white py-2.5 px-4 rounded-lg font-semibold hover:bg-[#4341d9] transition-colors duration-300">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            <section class="hook my-20 md:my-28">
                <div
                    class="relative rounded-3xl bg-gradient-to-r from-[#FF71CD] to-[#5755FE] p-12 text-center text-white overflow-hidden">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-white/10 rounded-full"></div>
                    <div class="absolute -bottom-16 -right-10 w-52 h-52 bg-white/10 rounded-full"></div>
                    <div class="relative z-10 flex justify-center items-center flex-col gap-5">
                        <h2 class="text-4xl md:text-5xl font-extrabold">Siap Melesat?</h2>
                        <p class="text-lg md:text-xl text-white/80 md:w-1/2">Gabung dengan ribuan Sobat lainnya dan
                            mulai perjalanan belajarmu hari ini. Gratis!</p>
                        <button
                            class="mt-4 px-10 py-3 rounded-lg bg-white text-[#5755FE] text-lg font-bold cursor-pointer shadow-lg hover:scale-105 transform transition-transform duration-300 ease-in-out">
                            Mulai Belajar Sekarang
                        </button>
                    </div>
                </div>
            </section>
        </main>

    </div>

    <x-footer />
</body>

</html>