 <!-- footer -->
    <footer class="footer mt-24 h-full bg-[#263238]">
        <div class="logo mx-auto max-w-7xl">
            <img class="w-24 -ml-5" src="/assets/soba-belajar.png" alt="">
        </div>
        <div class="footer-container mx-auto max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-y-5">
                <div class="left-side">
                    <div class="desc">
                        <p class="text-white">Belajar sepuasnya, no bayar-bayar club</p>
                    </div>
                    <div class="sosmed flex gap-2 mt-4">
                        @for ($i = 0; $i < 4; $i++)
                        <div class="instagram relative group">
                            <div class="icon text-[#989898] group-hover:text-white transition-all duration-300 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                                </svg>
                            </div>
                            <div class="absolute -left-5 opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out">
                                <p class="text-white">Instagram</p>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="right-side flex lg:justify-end">
                    <div class="footer-link">
                        <div class="nav-link flex items-center justify-center gap-6">
                            <a class="text-[#989898] lg:text-xl hover:text-white" href="#">Kursus</a>
                            <a class="text-[#989898] lg:text-xl hover:text-white" href="#">Program</a>
                            <a class="text-[#989898] lg:text-xl hover:text-white" href="#">Testimoni</a>
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
