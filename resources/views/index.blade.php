<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOBAT BELAJAR</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto max-w-7xl">

        <!-- header -->
        <div class="header py-2">
            <div class="navbar grid grid-cols-3">
                <div class="logo col-span-1">
                    <img src="/assets/soba-belajar.png" alt="" class="logo-web w-24">
                </div>
                <div class="nav-link col-span-1 flex items-center justify-center gap-6">
                    <a href="#">Kursus</a>
                    <a href="#">Program</a>
                    <a href="#">Testimoni</a>
                </div>
                <div class="login-with-google col-span-1 cursor-pointer flex items-center justify-end">
                    <a href="{{ url('/auth/redirect/google') }}">
                        <div class="flex border p-2 gap-2 rounded-md">
                            <img src="/assets/google.svg" alt="" class="google-logo w-6">
                            Login with google
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- hero section -->
        <div class="hero-section">
            <div class="headline mt-8 flex justify-center items-center flex-col gap-2 md:gap-4 lg:gap-6 h-[40dvh]">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-center">
                    <span class="text-[#FF71CD]">Belajar</span>
                    <span>Belajar</span>
                    <span class="text-[#5755FE]">Belajar</span>
                </h1>
                <p class="text-center md:text-xl lg:text-[20px] text-gray-400 lg:w-1/2">Belajar sepuasnya, no bayar-bayar club</p>
                <button class="px-4 md:px-8 lg:px-12 py-1 md:py-2 lg:py-4 rounded-lg lg:rounded-2xl bg-[#5755FE] text-white lg:text-xl font-semibold cursor-pointer shadow-lg  hover:bg-[#8B93FF] transition-all duration-300 ease-in-out">Jelajahi</button>
            </div>

            <div class="hidden md:flex justify-between gap-3 w-full mt-16 ">
                <div class="img1 col-span-1">
                    <img class="col-span-1" src="/assets/hero-1.png" alt="">
                </div>
                <div class="img2 col-span-1">
                    <img class="col-span-1" src="/assets/hero-1.png" alt="">
                </div>
                <div class="img3 col-span-1">
                    <img class="col-span-1" src="/assets/hero-1.png" alt="">
                </div>
                <div class="img4 col-span-1">
                    <img class="col-span-1" src="/assets/hero-1.png" alt="">
                </div>
            </div>
        </div>
        <!-- end hero section -->

        <!-- program -->
        <div class="program mt-16">
            <div class="rounded-3xl bg-[#5755FE] w-full h-full p-8 grid grid-cols-1 lg:grid-cols-4 justify-between shadow-[0_0_5px_1px_#5755FE]">
                @foreach ($data['program'] as $program)

                <div class="col-span-1 sm:border-b lg:border-b-0 lg:border-r border-white flex justify-center flex-col gap-2 lg:gap-8 text-white p-4">
                    <h1 class="text-2xl md:text-4xl font-semibold ">{{ $program['title'] }}</h1>
                    <p>{{ $program['deskripsi'] }}</p>
                </div>
                
                @endforeach
                <div class="col-span-1  border-white flex justify-center flex-col gap-2 lg:gap-8 text-white p-4">
                    <h1 class="text-2xl md:text-4xl font-semibold">Kualitas Bukan Kaleng-Kaleng</h1>
                    <p>Materi yang disusun dengan rapi, cocok buat pelajar, mahasiswa, atau kamu yang lagi self-learning.</p>
                </div>
            </div>
        </div>
        <!-- end programs -->

        <!-- whats? -->
        <div class="grid lg:grid-cols-2 gap-4 mt-24 py-2">
            <div class="img col-span-1">
                <img class="md:w-full" src="/assets/apalah.png" alt="">
            </div>
            <div class="col-span-1">
                <h1 class="text-5xl font-extrabold">Kenapa Pilih Sobat Belajar?</h1>
                <p class="text-[#989898] lg:text-xl my-5">Sobat Belajar dirancang buat kamu yang pengen belajar tanpa ribet. Semua materi bisa diakses gratis, cukup login pakai akun Google dan langsung mulai belajar. Gak ada batasan, gak ada biaya langganan, karena kami percaya, ilmu itu harus bisa diakses semua orang.</p>
                <p class="text-[#989898] lg:text-xl my-5">Platform ini juga dibuat ringan dan simple, jadi kamu bisa belajar kapan aja, bahkan dari HP sekalipun. Cocok buat pelajar, mahasiswa, atau siapa aja yang pengen upgrade skill dengan cara yang fun dan fleksibel. Yuk, belajar bareng tanpa tekanan, bareng Sobat Belajar!</p>
            </div>
        </div>
        <!-- end whats? -->

        <!-- materi unggulan -->
        <div class="container-materi-unggulan my-24">
            <div class="h1 text-center font-extrabold text-4xl">KURSUS UNGGULAN</div>
            <div class="grid lg:grid-cols-2 my-12 lg:my-24 gap-y-6 lg:gap-y-16">
                @foreach ($data['materi-unggulan'] as $materi)
                <div class="materi1 grid grid-cols-3 gap-5">
                    <div class="img-materi">
                        <img class="w-[400px]" src="{{ $materi['img'] }}" alt="">
                    </div>
                    <div class="flex flex-col gap-5 col-span-2">
                        <div class="judul-materi">
                            <h1 class="font-extrabold text-2xl">{{ $materi['title'] }}</h1>
                        </div>
                        <div class="deskripsi-singkat">
                            <p class="text-[#989898]">{{ $materi['deskripsi'] }}</p>
                        </div>
                        <div class="tombol-lihat w-32">
                            <button class="cursor-pointer w-full bg-[#8B93FF] text-white py-2 px-4 rounded-lg hover:bg-[#5755FE] transition-all duration-300 ease-in-out">Lihat</button>
                        </div>
                    </div>
                </div>
                
                @endforeach

              

            </div>
        </div>
        <!-- end materi unggulan -->

        <!-- hook -->
        <div class="hook relative">
            <div class="hidden lg:block absolute -left-1/4 lg:left-0">
                <img class="w-[200px] lg:w-full" src="/assets/hook kiri.png" alt="">
            </div>
            <div class="hidden lg:block absolute -right-1/4 lg:right-0">
                <img class="w-[200px] lg:w-full" src="/assets/hook kanan.png" alt="">
            </div>
            <div class="headline mt-8 flex justify-center items-center flex-col gap-2 md:gap-4 lg:gap-6 h-[40dvh]">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-center ">Tunggu Apa Lagi</h1>
                <p class="text-center text-[20px] text-gray-400 w-1/2">Klik mulai belajar sekarang</p>
                <button class="px-4 md:px-8 lg:px-12 py-1 md:py-2 lg:py-4 rounded-lg lg:rounded-2xl bg-[#5755FE] text-white lg:text-xl font-semibold cursor-pointer shadow-lg  hover:bg-[#8B93FF] transition-all duration-300 ease-in-out">Mulai Belajar</button>
            </div>
        </div>
        <!-- end hook -->

    </div>

    <!-- footer -->
    <x-footer />
    <!-- end footer -->

</body>

</html>
