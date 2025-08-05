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
                    <div class="login-with-google col-span-1 cursor-pointer flex items-center justify-end">
                           <div class="flex border p-2 gap-2 rounded-md">
                             <img src="/assets/google.svg" alt="" class="google-logo w-6">
                            Login with google
                           </div>
                    </div>
                </div>
            </div> 
            <!-- end header -->

            <!-- hero section -->
            <div class="hero-section">
                <div class="headline mt-8 flex justify-center items-center flex-col gap-6 h-[40dvh]">
                    <h1 class="text-7xl font-extrabold"><span class="text-[#FF71CD]">Belajar</span> <span>Belajar</span> <span class="text-[#5755FE]">Belajar</span></h1>
                    <p class="text-center text-[20px] text-gray-400 w-1/2">lorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledaklorem ipsum dolor sit amet biji meledak</p>
                    <button class="px-12 py-4 rounded-2xl bg-[#5755FE] text-white font-semibold cursor-pointer shadow-lg-[#8B93FF] text-xl hover:bg-[#8B93FF]">Explore</button>
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
                
            </div>
            <!-- end hero section -->

            <!-- program -->
            <div class="program mt-16">
                <div class="rounded-3xl bg-[#5755FE] w-full h-90 p-6">
                    <div>
                        <h1>Program</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quasi nisi, soluta tempora suscipit atque. Ipsum at tenetur iusto assumenda!</p>
                    </div>

                </div>
            </div>
            <!-- end program -->
        </div>
    </body>
</html>
-+
