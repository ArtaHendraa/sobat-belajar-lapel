    <aside id="sidebar"
        class="fixed md:sticky z-50 left-0 top-0 h-screen w-full max-w-3xs md:max-w-xs bg-white border-r border-black/10 px-6 overflow-y-auto max-h-screen transform transition-transform duration-300 -translate-x-full lg:translate-x-0">

        <main class="flex flex-col justify-between h-full" id="sidebar">
            <div class="mb-6">
                <header class="flex items-center gap-2 my-9">
                    <img src="/sobat-belajar.svg" alt="">
                    <h1 class="text-[#1674BE] text-xl capitalize font-bold">sobat belajar</h1>
                </header>
                <h2 class="text-base font-semibold text-gray-600 capitalize mb-4">
                    main menu
                </h2>
                <div class="flex flex-col gap-y-3">
                    <x-sidebar-link href="/dashboard" :active="request()->is('dashboard')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="capitalize">dashboard</span>
                    </x-sidebar-link>

                    <x-sidebar-link href="/course" :active="request()->is('course')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                        </svg>
                        <span class="capitalize">course</span>
                    </x-sidebar-link>

                    <x-sidebar-link href="/partner" :active="request()->is('partner')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>
                        <span class="capitalize">partner</span>
                    </x-sidebar-link>

                    <x-sidebar-link href="/history" :active="request()->is('history')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                        <span class="capitalize">history</span>
                    </x-sidebar-link>
                </div>
            </div>

            <div class="mb-10">
                <h2 class="text-base font-semibold text-gray-600 capitalize mb-4">
                    settings
                </h2>
                <div class="flex flex-col gap-y-3">
                    <a href="/logout" class="flex items-center gap-3 text-base opacity-50 py-3 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>

                        <span class="capitalize font-normal">log out</span>
                    </a>
                </div>
            </div>
        </main>
    </aside>
    {{-- overlay --}}
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/30 backdrop-blur-xs z-40 lg:hidden hidden">
    </div>


    <script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openSidebar = document.getElementById('openSidebar');

    openSidebar?.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    overlay?.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
});
    </script>