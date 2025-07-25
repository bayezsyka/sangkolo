<header class="bg-[#383838] shadow-lg sticky top-0 z-50 backdrop-blur-sm bg-opacity-95 border-b border-[#5c5c5c]">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('landing') }}" class="text-white text-2xl font-bold tracking-tight hover:text-gray-200 transition duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    SANGKOLO
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <!-- Services Dropdown -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @keydown.escape="open = false" 
                            class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium flex items-center transition-all duration-200 hover:bg-[#5c5c5c]">
                        <span>Jasa</span>
                        <svg :class="{'transform rotate-180': open}" class="w-4 h-4 ml-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="origin-top-right absolute left-0 mt-2 w-56 rounded-md shadow-lg bg-[#5c5c5c] ring-1 ring-[#383838] ring-opacity-5 focus:outline-none p-1">
                        <a href="#" class="block px-4 py-2.5 text-sm text-white hover:bg-[#909090] hover:text-white rounded-md transition duration-150">Jasa Design</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-white hover:bg-[#909090] hover:text-white rounded-md transition duration-150">Jasa Fotografer & Videografer</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-white hover:bg-[#909090] hover:text-white rounded-md transition duration-150">Jasa Pembuatan Website</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-white hover:bg-[#909090] hover:text-white rounded-md transition duration-150">Jasa Pembuatan Perangkat IoT</a>
                    </div>
                </div>

                <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 hover:bg-[#5c5c5c]">Kaos Custom</a>
                <a href="{{ route('joki-tugas.index') }}" class="text-white hover:text-white transition duration-300">Joki Tugas</a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" x-data="{ mobileMenuOpen: false }" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-200 hover:bg-[#5c5c5c] focus:outline-none">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div x-show="mobileMenuOpen" x-cloak x-data="{ mobileMenuOpen: false }" 
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="lg:hidden bg-[#5c5c5c] shadow-xl rounded-b-lg">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <div x-data="{ mobileSubMenuOpen: false }" class="relative">
                <button @click="mobileSubMenuOpen = !mobileSubMenuOpen" class="w-full text-left text-white hover:text-gray-200 hover:bg-[#909090] block px-3 py-2 rounded-md text-base font-medium flex justify-between items-center">
                    <span>Jasa</span>
                    <svg :class="{'transform rotate-180': mobileSubMenuOpen}" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="mobileSubMenuOpen" class="pl-4 space-y-1 mt-1">
                    <a href="#" class="block px-3 py-2 text-white hover:text-gray-200 hover:bg-[#909090] rounded-md text-sm font-medium">Jasa Design</a>
                    <a href="#" class="block px-3 py-2 text-white hover:text-gray-200 hover:bg-[#909090] rounded-md text-sm font-medium">Jasa Fotografer & Videografer</a>
                    <a href="#" class="block px-3 py-2 text-white hover:text-gray-200 hover:bg-[#909090] rounded-md text-sm font-medium">Jasa Pembuatan Website</a>
                    <a href="#" class="block px-3 py-2 text-white hover:text-gray-200 hover:bg-[#909090] rounded-md text-sm font-medium">Jasa Pembuatan Perangkat IoT</a>
                </div>
            </div>
            <a href="#" class="text-white hover:text-gray-200 hover:bg-[#909090] block px-3 py-2 rounded-md text-base font-medium">Kaos Custom</a>
            <a href="{{ route('joki-tugas.index') }}" class="text-white hover:text-white transition duration-300">Joki Tugas</a>
        </div>
    </div>
</header>