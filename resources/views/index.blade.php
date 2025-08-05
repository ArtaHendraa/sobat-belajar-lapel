<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOBAT BELAJAR</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto max-w-7xl  ">
        <!-- header -->
        <div class="header py-2">
            <div class="navbar grid grid-cols-3">
                <div class="logo col-span-1  ">
                    <img src="/assets/soba-belajar.png" alt="" class="logo-web w-24">
                </div>
                <div class="nav-link col-span-1  flex items-center justify-center gap-6">
                    <a href="#">Kursus</a>
                    <a href="#">Program</a>
                    <a href="#">Testimoni</a>
                </div>
                <a href="{{ url('/auth/redirect/google') }}">
                    <div class="login-with-google col-span-1 cursor-pointer flex items-center justify-end">
                        <div class="flex border p-2 gap-2 rounded-md">
                            <img src="/assets/google.svg" alt="" class="google-logo w-6">
                            Login with google
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- end header -->

        <!-- hero section -->
        <div class="hero-section">
            <div class="headline mt-8 flex justify-center items-center flex-col gap-6 h-[40dvh]">
                <h1 class="text-7xl font-extrabold"><span class="text-[#FF71CD]">Belajar</span> <span>Belajar</span>
                    <span class="text-[#5755FE]">Belajar</span>
                </h1>
                <p class="text-center text-[20px] text-gray-400 w-1/2">lorem ipsum dolor sit amet biji meledaklorem
                    ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak</p>
                <button
                    class="px-12 py-4 rounded-2xl bg-[#5755FE] text-white font-semibold cursor-pointer shadow-lg-[#8B93FF] text-xl hover:bg-[#8B93FF]">Explore</button>
            </div>

            <div class="flex justify-between gap-3 w-full mt-16">
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

            <!-- program -->
            <div class="program mt-16">
                <div class="rounded-3xl bg-[#5755FE] w-full h-90 p-8 flex justify-between shadow-[0_0_5px_1px_#5755FE]">
                    <div class="border-r  border-white flex justify-center flex-col gap-8 text-white p-4">
                        <h1 class="text-4xl font-semibold">Program</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quasi nisi, soluta tempora suscipit atque. Ipsum at tenetur iusto assumenda!</p>
                    </div>
                    <div class="border-r  border-white flex justify-center flex-col gap-8 text-white p-4">
                        <h1 class="text-4xl font-semibold">Program</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quasi nisi, soluta tempora suscipit atque. Ipsum at tenetur iusto assumenda!</p>
                    </div>
                    <div class="border-r  border-white flex justify-center flex-col gap-8 text-white p-4">
                        <h1 class="text-4xl font-semibold">Program</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quasi nisi, soluta tempora suscipit atque. Ipsum at tenetur iusto assumenda!</p>
                    </div>
                    <div class=" border-white flex justify-center flex-col gap-8 text-white p-4">
                        <h1 class="text-4xl font-semibold">Program</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quasi nisi, soluta tempora suscipit atque. Ipsum at tenetur iusto assumenda!</p>
                    </div>
                    
        </div>
        <!-- end hero section -->

        <!-- program -->
        <div class="program mt-16">
            <div class="rounded-3xl bg-[#5755FE] w-full h-90 p-6">
                <div>
                    <h1>Program</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quasi nisi, soluta tempora
                        suscipit atque. Ipsum at tenetur iusto assumenda!</p>
                </div>

            </div>
            <!-- end program -->

            <!-- whats? -->
            <div class="grid grid-cols-2 mt-24 py-2">
                <div class="img col-span-1">
                    <img src="/assets/apalah.png" alt="">
                </div>
                <div class="col-span-1">
                    <h1 class="text-5xl font-extrabold">LOREM IPSUM</h1>
                    <p class="text-[#989898] text-2xl my-5">lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak</p>
                    <p class="text-[#989898] text-2xl my-5">lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak</p>
                </div>
            </div>
            <!-- end whats? -->

            <!-- materi unggulan -->
             <div class="container-materi-unggulan my-24" >
                <div class="h1 text-center font-extrabold text-4xl">MATERI UNGGULAN</div>
                <div class="grid grid-cols-2 my-24 gap-y-16">
                    <div class="materi1 flex  gap-5">
                        <div class="img-materi">
                            <img class="w-[1000px]" src="/assets/mtk.png" alt="">
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="judul-materi">
                                <h1 class="font-extrabold text-2xl">Matematika</h1>
                            </div>
                            <div class="deskripsi-singkat">
                                <p class="text-[#989898]">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos porro doloribus qui eligendi vitae ex commodi saepe consequuntur magni. Distinctio sapiente perferendis quia enim iure totam, provident illum laboriosam delectus?
                                </p>
                            </div>   
                            <div class="tombol-lihat w-32">
                                <button class="cursor-pointer w-full bg-[#8B93FF] text-white py-2 px-4 rounded-lg hover:bg-[#5755FE] transition-all duration-300 ease-in-out">Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="materi1 flex  gap-5">
                        <div class="img-materi">
                            <img class="w-[1000px]" src="/assets/mtk.png" alt="">
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="judul-materi">
                                <h1 class="font-extrabold text-2xl">Matematika</h1>
                            </div>
                            <div class="deskripsi-singkat">
                                <p class="text-[#989898]">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos porro doloribus qui eligendi vitae ex commodi saepe consequuntur magni. Distinctio sapiente perferendis quia enim iure totam, provident illum laboriosam delectus?
                                </p>
                            </div>   
                            <div class="tombol-lihat w-32">
                                <button class="cursor-pointer w-full bg-[#8B93FF] text-white py-2 px-4 rounded-lg hover:bg-[#5755FE] transition-all duration-300 ease-in-out">Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="materi1 flex  gap-5">
                        <div class="img-materi">
                            <img class="w-[1000px]" src="/assets/mtk.png" alt="">
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="judul-materi">
                                <h1 class="font-extrabold text-2xl">Matematika</h1>
                            </div>
                            <div class="deskripsi-singkat">
                                <p class="text-[#989898]">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos porro doloribus qui eligendi vitae ex commodi saepe consequuntur magni. Distinctio sapiente perferendis quia enim iure totam, provident illum laboriosam delectus?
                                </p>
                            </div>   
                            <div class="tombol-lihat w-32">
                                <button class="cursor-pointer w-full bg-[#8B93FF] text-white py-2 px-4 rounded-lg hover:bg-[#5755FE] transition-all duration-300 ease-in-out">Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="materi1 flex  gap-5">
                        <div class="img-materi">
                            <img class="w-[1000px]" src="/assets/mtk.png" alt="">
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="judul-materi">
                                <h1 class="font-extrabold text-2xl">Matematika</h1>
                            </div>
                            <div class="deskripsi-singkat">
                                <p class="text-[#989898]">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos porro doloribus qui eligendi vitae ex commodi saepe consequuntur magni. Distinctio sapiente perferendis quia enim iure totam, provident illum laboriosam delectus?
                                </p>
                            </div>   
                            <div class="tombol-lihat w-32">
                                <button class="cursor-pointer w-full bg-[#8B93FF] text-white py-2 px-4 rounded-lg hover:bg-[#5755FE] transition-all duration-300 ease-in-out">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <!-- end materi unggulan -->

            <!-- hook -->
             <div class="hook relative">
                <div class="absolute">
                    <img src="/assets/hook kiri.png" alt="">
                </div>
                <div class="absolute right-0">
                    <img src="/assets/hook kanan.png" alt="">
                </div>
                <div class="headline mt-8 flex justify-center items-center flex-col gap-6 h-[40dvh]">
                    <h1 class="text-7xl font-extrabold">Tunggu Apa Lagi</h1>
                    <p class="text-center text-[20px] text-gray-400 w-1/2">lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak</p>
                    <button class="px-12 py-4 rounded-2xl bg-[#5755FE] text-white font-semibold cursor-pointer shadow-lg-[#8B93FF] text-xl hover:bg-[#8B93FF] transition-all duration-300 ease-in-out">Mulai Belajar</button>
                </div>
             </div>
             <!-- end hook -->

             
        </div>
        <div class="footer mt-24 h-full  bg-[#263238]">
            <div class="logo mx-auto  max-w-7xl">
                <img class="w-24 -ml-5" src="/assets/soba-belajar.png" alt="">
            </div>
            <div class="footer-container mx-auto  max-w-7xl">
                <div class="grid grid-cols-2">
                    <div class="left-side">
                        
                        <div class="desc">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem debitis repellat tempore beatae optio rem incidunt sit facere quis minima.</p>
                        </div>
                        <div class="sosmed flex gap-2 mt-4">
                            <div class="instagram relative group">
                                <div class="icon text-[#989898] group-hover:text-white transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                                </div>

                                <div class="absolute -left-5 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                    <p class="text-white">Instagram</p>
                                </div>
                            </div>
                            <div class="instagram relative group ">
                                <div class="icon text-[#989898] group-hover:text-white transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                                </div>

                                <div class="absolute -left-5 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                    <p class="text-white">Instagram</p>
                                </div>
                            </div>
                            <div class="instagram relative group ">
                                <div class="icon text-[#989898] group-hover:text-white transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                                </div>

                                <div class="absolute -left-5 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                    <p class="text-white">Instagram</p>
                                </div>
                            </div>
                            <div class="instagram relative group ">
                                <div class="icon text-[#989898] group-hover:text-white transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg>
                                </div>

                                <div class="absolute -left-5 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                    <p class="text-white">Instagram</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side flex justify-end">
                        <div class="footer-link">
                             <div class="nav-link col-span-1  flex items-center justify-center gap-6">
                                <a class="text-[#989898] text-xl hover:text-white" href="#">Kursus</a>
                                <a class="text-[#989898] text-xl hover:text-white" href="#">Program</a>
                                <a class="text-[#989898] text-xl hover:text-white" href="#">Testimoni</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line h-[2px] bg-white mx-auto max-w-7xl mt-8"></div>
            <div class="copyright mx-auto max-w-7xl  py-8">
                <p class="text-center font-semibold text-[#989898]">Copyright Sobat Belajar © 2025</p>
            </div>
        </div>
        <!-- end program -->
    </div>
</body>

</html>
