@extends('layouts.main')

@section('content')
<!-- Hero Section: Custom T-Shirt -->
<section id="hero-custom-tees" class="bg-[#FAF9F6]">
  <div class="mx-auto max-w-7xl px-6 py-16 md:py-24">
    <div class="grid items-center gap-10 md:grid-cols-2">
      <!-- Kiri: Teks -->
      <div class="space-y-4">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight text-slate-900">
          pesan kaos dengan design suka-suka hanya 80ribu
        </h1>
        <p class="text-xl md:text-2xl text-slate-700">
          bisa satuan sampai lusinan
        </p>
        <p class="text-sm md:text-base text-slate-500">
          harga menyesuaikan jumlah, bisa lebih murah
        </p>
      </div>

      <!-- Kanan: Rotator Mockups (simple auto-fade) -->
      <div
        class="relative mx-auto w-full max-w-lg"
        data-rotator
        role="region"
        aria-label="Rotator mockup kaos"
        data-interval="2000"
      >
        <div class="relative aspect-[4/3] w-full overflow-visible">
          <!-- Img 1 -->
          <img
            src="{{ asset('image/kaosalanwar.png') }}"
            alt="Contoh desain kaos 1"
            class="rotator-img absolute inset-0 m-auto h-full w-full object-contain"
            data-rotator-item
            draggable="false"
            fetchpriority="high"
            decoding="async"
            loading="eager"
          />
          <!-- Img 2 -->
          <img
            src="{{ asset('image/kaosbidah.png') }}"
            alt="Contoh desain kaos 2"
            class="rotator-img absolute inset-0 m-auto h-full w-full object-contain"
            data-rotator-item
            draggable="false"
            decoding="async"
            loading="lazy"
          />
          <!-- Img 3 -->
          <img
            src="{{ asset('image/kubahkaos.png') }}"
            alt="Contoh desain kaos 3"
            class="rotator-img absolute inset-0 m-auto h-full w-full object-contain"
            data-rotator-item
            draggable="false"
            decoding="async"
            loading="lazy"
          />

          <!-- Floating dekor (disimpan tapi dimatikan) -->
          <div class="floating absolute -top-4 -left-4 w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full opacity-20 animate-float-slow" data-float-1></div>
          <div class="floating absolute -bottom-6 -right-6 w-12 h-12 bg-gradient-to-br from-pink-400 to-red-500 rounded-full opacity-15 animate-float-medium" data-float-2></div>
          <div class="floating absolute top-1/2 -left-8 w-6 h-6 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-25 animate-float-fast" data-float-3></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('styles')
<style>
  :root{
    /* kontrol halus */
    --rotator-duration: 600ms;
    --rotator-ease: cubic-bezier(0.16,1,0.3,1);
  }

  .rotator-img{
    opacity:0;
    will-change:opacity,transform;
    backface-visibility:hidden;
    transform:translateZ(0) scale(1);
    pointer-events:none;
    contain:paint;
    transition:none; /* hindari konflik dengan WAAPI */
  }
  .rotator-img.is-active{ opacity:1; }

  /* Simpan dekor tapi mati agar “fitur” tidak hilang */
  .floating{ display:none !important; }

  /* Tetap ada keyframes kalau nanti mau hidupkan lagi */
  @keyframes float-slow{ 0%,100%{transform:translateY(0) rotate(0)} 50%{transform:translateY(-18px) rotate(160deg)} }
  @keyframes float-medium{ 0%,100%{transform:translateY(0) rotate(0) scale(1)} 33%{transform:translateY(-14px) rotate(110deg) scale(1.06)} 66%{transform:translateY(-22px) rotate(220deg) scale(0.94)} }
  @keyframes float-fast{ 0%,100%{transform:translate(0,0)} 25%{transform:translate(10px,-10px)} 50%{transform:translate(-5px,-18px)} 75%{transform:translate(14px,-6px)} }

  .animate-float-slow{ animation:float-slow 6s ease-in-out infinite }
  .animate-float-medium{ animation:float-medium 4s ease-in-out infinite }
  .animate-float-fast{ animation:float-fast 3s ease-in-out infinite }

  @media (prefers-reduced-motion: reduce){
    .animate-float-slow,
    .animate-float-medium,
    .animate-float-fast{ animation:none !important }
  }
</style>
@endpush

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const rotator = document.querySelector('[data-rotator]');
    if (!rotator) return;

    const items = Array.from(rotator.querySelectorAll('[data-rotator-item]'));
    if (items.length <= 1) {
      // tampilkan satu-satunya gambar
      if (items[0]) items[0].style.opacity = '1';
      return;
    }

    // Reduced motion: tampilkan gambar pertama saja
    const reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion) {
      items.forEach((img, i) => {
        img.style.opacity = i === 0 ? '1' : '0';
        img.classList.toggle('is-active', i === 0);
      });
      return;
    }

    const intervalTime = Number(rotator.getAttribute('data-interval')) || 2000;
    const durationMs = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--rotator-duration')) || 600;
    const easing = getComputedStyle(document.documentElement).getPropertyValue('--rotator-ease').trim() || 'cubic-bezier(0.16,1,0.3,1)';

    // State awal + preload ringan
    items.forEach((img, i) => {
      img.style.opacity = i === 0 ? '1' : '0';
      img.classList.toggle('is-active', i === 0);
      const pre = new Image();
      pre.src = img.currentSrc || img.src;
    });

    let index = 0;
    let ticking = false; // guard agar animasi tidak bertumpuk (walau tanpa interaksi)

    setInterval(() => {
      if (ticking) return; // jaga-jaga
      ticking = true;

      const current = items[index];
      const next = items[(index + 1) % items.length];

      // Fade out/in serentak
      const outAnim = current.animate(
        [{ opacity: 1 }, { opacity: 0 }],
        { duration: durationMs, easing, fill: 'forwards' }
      );
      const inAnim = next.animate(
        [{ opacity: 0 }, { opacity: 1 }],
        { duration: durationMs, easing, fill: 'forwards' }
      );

      Promise.allSettled([outAnim.finished, inAnim.finished]).then(() => {
        current.style.opacity = '0';
        current.classList.remove('is-active');
        next.style.opacity = '1';
        next.classList.add('is-active');
        index = (index + 1) % items.length;
        ticking = false;
      }).catch(() => { ticking = false; });
    }, intervalTime);
  });
</script>
@endpush
