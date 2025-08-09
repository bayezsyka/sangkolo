<!--
Responsive sticky header for multiple device sizes
- Uses Tailwind CSS utility classes
- Uses Alpine.js for scroll + mobile menu state (x-data)
- Sticky, color-shifts on scroll, accessible mobile menu

Drop this inside your layout where Tailwind + Alpine are available.
-->
<header x-data="{ scrolled: false, open: false }"
        @scroll.window="scrolled = window.scrollY > 10"
        :class="scrolled ? 'backdrop-blur supports-[backdrop-filter]:bg-white/70' : ''"
        class="sticky top-0 z-50">
  <nav
    class="transition-all duration-300 border-b"
    :class="scrolled
      ? 'bg-neutral-900 text-white border-neutral-800 shadow-sm'
      : 'bg-[#FAF9F6] text-neutral-900 border-transparent'">

    <div class="mx-auto max-w-7xl px-3 sm:px-4 md:px-6 lg:px-8">
      <div class="h-14 md:h-16 flex items-center justify-between">
        <!-- Left: Brand / Home icon (visible on all screens) -->
        <div class="flex items-center">
          <a href="{{ route('landing') }}"
             class="inline-flex items-center gap-2 p-2 rounded-md text-sm transition-opacity hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-neutral-500/40"
             aria-label="Beranda">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="h-5 w-5 md:h-6 md:w-6" 
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M3 9.75L12 3l9 6.75V21a1.5 1.5 0 01-1.5 1.5H4.5A1.5 1.5 0 013 21V9.75z"/>
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M9 22.5v-6.75A1.5 1.5 0 0110.5 14.25h3A1.5 1.5 0 0115 15.75V22.5"/>
            </svg>
            <span class="sr-only sm:not-sr-only hidden sm:inline text-sm font-medium">Beranda</span>
          </a>
        </div>

        <!-- Center: Desktop Nav (hidden on small screens) -->
        <ul class="hidden md:flex items-center gap-4 lg:gap-6">
          <li>
            <a href="/kaos"
               class="px-3 py-2 rounded-md text-sm font-medium transition-opacity hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-neutral-500/40">
              Kaos Custom
            </a>
          </li>
          <li>
            <a href="{{ route('joki-tugas.index') }}"
               class="px-3 py-2 rounded-md text-sm font-medium transition-opacity hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-neutral-500/40">
              Joki Tugas
            </a>
          </li>
        </ul>

        <!-- Right: CTA on desktop, hamburger on mobile -->
        <div class="flex items-center gap-2">
          <!-- Desktop CTA -->
          <a href="https://wa.me/6285161603362"
             class="hidden sm:inline-flex px-4 py-2 rounded-md text-sm font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-neutral-500/40"
             :class="scrolled
               ? 'bg-white text-neutral-900 hover:bg-neutral-100'
               : 'bg-neutral-900 text-white hover:bg-neutral-800'">
            Hubungi Kami
          </a>

          <!-- Mobile menu button -->
          <button @click="open = !open" :aria-expanded="open.toString()" aria-controls="mobile-menu"
                  class="inline-flex md:hidden items-center justify-center p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-500/40"
                  :class="scrolled ? 'text-white hover:bg-white/10' : 'text-neutral-900 hover:bg-neutral-900/5'">
            <span class="sr-only">Toggle menu</span>
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Panel -->
    <div id="mobile-menu" x-cloak x-show="open" x-transition.origin.top
         class="md:hidden border-t"
         :class="scrolled ? 'border-neutral-800 bg-neutral-900 text-white' : 'border-neutral-200 bg-[#FAF9F6] text-neutral-900'">
      <div class="px-3 sm:px-4 py-3 space-y-1">
        <a href="{{ url('/kaos') }}" class="block px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-neutral-500/40 hover:opacity-80">Kaos Custom</a>
        <a href="{{ route('joki-tugas.index') }}" class="block px-3 py-2 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-neutral-500/40 hover:opacity-80">Joki Tugas</a>
        <a href="https://wa.me/6285161603362" class="block mt-1 px-3 py-2 rounded-md text-sm font-semibold text-center"
           :class="scrolled ? 'bg-white text-neutral-900 hover:bg-neutral-100' : 'bg-neutral-900 text-white hover:bg-neutral-800'">
          Hubungi Kami
        </a>
      </div>
    </div>
  </nav>
</header>

<!-- Notes:
- On mobile (<md), links collapse into a toggled panel with CTA.
- On desktop (>=md), center nav + right CTA are visible.
- Color scheme and subtle shadow change when scrolled > 10px.
- Uses x-cloak to avoid FOUC; ensure you add [x-cloak] { display:none !important; } in your CSS.
- If you need the nav centered vertically between left and right groups at >=md, it's already balanced with justify-between.
-->
