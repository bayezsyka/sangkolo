@extends('layouts.main')

@section('content')

<!-- Hero Section – White Bone Theme (slim + fully responsive) -->
<section class="relative isolate overflow-hidden bg-[#FAF9F6] text-black">
  <div class="mx-auto grid max-w-6xl grid-cols-1 items-center gap-8 px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20 md:grid-cols-2">
    <!-- Copy -->
    <div class="relative z-10">
      <h1 class="text-4xl sm:text-5xl font-extrabold leading-[1.1] tracking-tight">SANGKOLO</h1>
      <h2 class="mt-2 text-lg sm:text-xl font-semibold text-gray-800">Agensi Jasa Serabutan</h2>
      <p class="mt-4 max-w-md text-sm sm:text-base text-gray-600">Melayani apa saja yang bisa kita layani. Mengerjakan apa saja yang bisa kita kerjakan.</p>

      <!-- Two simple white cards -->
      <div class="mt-6 grid grid-cols-2 gap-3 max-w-xs">
        <a class="flex flex-col items-center justify-center rounded-lg bg-white px-3 py-4 sm:px-4 sm:py-5 text-center shadow hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-orange-300">
          <span class="text-sm sm:text-base font-bold text-black mb-1">Kaos Custom</span>
          <span class="text-[10px] sm:text-xs text-gray-700">Pesan kaos sesuai desainmu</span>
        </a>
        <a class="flex flex-col items-center justify-center rounded-lg bg-white px-3 py-4 sm:px-4 sm:py-5 text-center shadow hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-orange-300">
          <span class="text-sm sm:text-base font-bold text-black mb-1">Joki Tugas</span>
          <span class="text-[10px] sm:text-xs text-gray-700">Bantu selesaikan pekerjaanmu</span>
        </a>
      </div>
    </div>

    <!-- Visual carousel: unified timer to avoid overlap; pause on hold; click to next; menus disabled -->
    <div class="relative mx-auto w-full max-w-md md:max-w-none">
      <div id="heroCarousel" class="relative aspect-[4/3] w-full bg-transparent overflow-hidden rounded-lg select-none" role="region" aria-label="Carousel produk">
        <img id="heroImage" src="{{ asset('image/kaosalanwar.png') }}" alt="Produk Kami" class="absolute inset-0 h-full w-full object-contain p-3 sm:p-4 md:p-6 transition-opacity duration-700 ease-in-out pointer-events-none" loading="eager" draggable="false" />
        <div id="heroOverlay" class="absolute inset-0" tabindex="0" style="touch-action: manipulation; -webkit-touch-callout: none; -webkit-user-select: none; user-select: none;"></div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section – simpler, 2 columns on tablet & below, slim spacing -->
<section class="py-10 sm:py-12 lg:py-16 bg-[#FAF9F6]">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
    <div class="text-center mb-8 sm:mb-10 lg:mb-12">
      <span class="inline-block px-3 py-1.5 text-xs sm:text-sm font-semibold text-sangkolo-mid bg-sangkolo-mid/10 rounded-full animate-slide-up">Testimonial</span>
      <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-sangkolo-black animate-fade-in">Apa Kata Klien Kami</h2>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
      @forelse ($testimonials as $testimonial)
        <article class="bg-white rounded-lg border border-neutral-200/60 overflow-hidden shadow-sm transition-shadow duration-300 flex flex-col h-full">
          <div class="bg-gray-50 flex items-center justify-center p-2">
            <div class="w-full max-w-full aspect-[4/3] sm:aspect-[3/2] overflow-hidden">
              <img class="h-full w-full object-contain" src="{{ asset('storage/' . $testimonial->image_proof) }}" alt="Testimoni dari {{ $testimonial->customer_name }}" loading="lazy">
            </div>
          </div>
          <div class="p-4 sm:p-5 flex-grow flex flex-col">
            <h3 class="font-bold text-sangkolo-black text-base">{{ $testimonial->customer_name }}</h3>
            <p class="text-xs sm:text-sm text-gray-600">{{ $testimonial->customer_origin }}</p>
            <div class="mt-auto pt-2">
              <span class="text-xs font-medium text-white bg-sangkolo-mid inline-block px-2.5 py-1 rounded-lg">{{ $testimonial->service_used }}</span>
            </div>
          </div>
        </article>
      @empty
        <div class="col-span-full text-center text-sangkolo-black py-8 sm:py-10">
          <p class="text-base sm:text-lg">Belum ada testimoni yang bisa ditampilkan.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

<style>
  @keyframes fade-in { from { opacity: 0; } to { opacity: 1; } }
  @keyframes slide-up { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  .animate-fade-in { animation: fade-in 1s ease-out both; }
  .animate-slide-up { animation: slide-up 1s ease-out both; }
  @media (prefers-reduced-motion: reduce) { .animate-fade-in, .animate-slide-up { animation: none !important; } }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const images = [
      '{{ asset('image/kaosalanwar.png') }}',
      '{{ asset('image/kaosbidah.png') }}',
      '{{ asset('image/kubahkaos.png') }}'
    ];
    const DURATION = 2500;
    const FADE = 700;

    let index = 0;
    let timeoutId = null;
    let paused = false;
    let busy = false;
    let held = false;

    const heroImage = document.getElementById('heroImage');
    const heroOverlay = document.getElementById('heroOverlay');
    const heroCarousel = document.getElementById('heroCarousel');

    function scheduleNext() {
      clearTimeout(timeoutId);
      timeoutId = setTimeout(() => { if (!paused) advance(); }, DURATION);
    }

    function advance() {
      if (busy) return;
      busy = true;
      index = (index + 1) % images.length;
      heroImage.classList.add('opacity-0');
      setTimeout(() => {
        heroImage.src = images[index];
        heroImage.classList.remove('opacity-0');
        busy = false;
        scheduleNext();
      }, FADE);
    }

    heroOverlay.addEventListener('click', (e) => {
      e.preventDefault();
      paused = false;
      clearTimeout(timeoutId);
      advance();
    });

    heroOverlay.addEventListener('pointerdown', (e) => {
      e.preventDefault();
      held = true;
      paused = true;
      clearTimeout(timeoutId);
    });
    function resumeFromHold() {
      if (!held) return;
      held = false;
      paused = false;
      scheduleNext();
    }
    heroOverlay.addEventListener('pointerup', resumeFromHold);
    heroOverlay.addEventListener('pointercancel', resumeFromHold);
    heroOverlay.addEventListener('pointerleave', resumeFromHold);

    const suppress = (ev) => { ev.preventDefault(); ev.stopPropagation(); return false; };
    ['contextmenu','dragstart'].forEach(type => {
      heroCarousel.addEventListener(type, suppress);
      heroOverlay.addEventListener(type, suppress);
      heroImage.addEventListener(type, suppress);
    });
    heroImage.setAttribute('oncontextmenu', 'return false');

    scheduleNext();
  });
</script>

@endsection
