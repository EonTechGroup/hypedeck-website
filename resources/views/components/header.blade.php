<nav class="bg-white-800 fixed w-full z-20 top-0 start-0">
    <div class="mx-auto ">
        <div class="relative flex items-center justify-around bg-white">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden bg-white">
                <!-- Mobile menu button-->
                <button type="button" id="mobile-menu-button" class="relative inline-flex items-center justify-center rounded-md p-2 text-blue-950 hover:bg-blue-950 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg id="menu-open-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg id="menu-close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 flex items-center justify-center sm:hidden">
                <img class="h-11 w-auto" src="{{ asset('images/logo.webp') }}" alt="HypeDeck">
            </div>
            <div class="flex flex-1 justify-center items-center h-20">
                <div class="hidden sm:block">
                    <div class="flex items-center space-x-16 sm:space-x-9">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="rounded-md px-3 py-3 text-sm text-blue-950 font-sans font-semibold" aria-current="page">Solutions</a>
                        <a href="#" class="rounded-md px-3 py-3 text-sm font-sans font-semibold text-blue-950">Team</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm">
                            <img class="h-11 w-auto" src="{{ asset('images/logo.webp') }}" alt="HypeDeck">
                        </a>
                        <a href="#" class="rounded-md px-3 py-3 font-sans text-sm font-semibold text-blue-950">Clients</a>
                        <a href="#" class="rounded-md px-3 py-3 font-sans text-sm font-semibold text-blue-950">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden bg-white hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-blue-950 px-3 py-2 text-base font-medium text-white" aria-current="page">Solutions</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold font-sans text-blue-950 hover:bg-blue-900 hover:text-white">Team</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold font-sans text-blue-950 hover:bg-blue-900 hover:text-white">Clients</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold font-sans text-blue-950 hover:bg-blue-900 hover:text-white">Contact</a>
        </div>
    </div>
</nav>

<!-- Add this script at the bottom -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        var menu = document.getElementById('mobile-menu');
        var openIcon = document.getElementById('menu-open-icon');
        var closeIcon = document.getElementById('menu-close-icon');

        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            openIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });
</script>
