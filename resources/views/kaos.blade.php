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

      <!-- Kanan: Dynamic Rotating Mockups -->
      <div class="relative mx-auto w-full max-w-lg" data-rotator>
        <div class="relative aspect-[4/3] w-full overflow-visible">
          <!-- Img 1 -->
          <img src="{{ asset('image/kaosalanwar.png') }}" alt="Contoh desain kaos 1"
            class="absolute inset-0 m-auto h-full w-full object-contain transition-all duration-1000 ease-out opacity-100 scale-100 rotate-0 blur-0"
            data-rotator-item
          />
          <!-- Img 2 -->
          <img src="{{ asset('image/kaosbidah.png') }}" alt="Contoh desain kaos 2"
            class="absolute inset-0 m-auto h-full w-full object-contain transition-all duration-1000 ease-out opacity-0 scale-95 rotate-3 blur-sm"
            data-rotator-item
          />
          <!-- Img 3 -->
          <img src="{{ asset('image/kubahkaos.png') }}" alt="Contoh desain kaos 3"
            class="absolute inset-0 m-auto h-full w-full object-contain transition-all duration-1000 ease-out opacity-0 scale-110 -rotate-2 blur-sm"
            data-rotator-item
          />

          <!-- Floating Animation Elements -->
          <div class="absolute -top-4 -left-4 w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full opacity-20 animate-float-slow" data-float-1></div>
          <div class="absolute -bottom-6 -right-6 w-12 h-12 bg-gradient-to-br from-pink-400 to-red-500 rounded-full opacity-15 animate-float-medium" data-float-2></div>
          <div class="absolute top-1/2 -left-8 w-6 h-6 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-25 animate-float-fast" data-float-3></div>
        </div>
      </div>
    </div>
  </div>
</section>

@push('styles')
<style>
  @keyframes float-slow {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
  }
  
  @keyframes float-medium {
    0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
    33% { transform: translateY(-15px) rotate(120deg) scale(1.1); }
    66% { transform: translateY(-25px) rotate(240deg) scale(0.9); }
  }
  
  @keyframes float-fast {
    0%, 100% { transform: translateX(0px) translateY(0px); }
    25% { transform: translateX(10px) translateY(-10px); }
    50% { transform: translateX(-5px) translateY(-20px); }
    75% { transform: translateX(15px) translateY(-5px); }
  }
  
  @keyframes pulse-glow {
    0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
    50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.6); }
  }

  .animate-float-slow {
    animation: float-slow 6s ease-in-out infinite;
  }
  
  .animate-float-medium {
    animation: float-medium 4s ease-in-out infinite;
  }
  
  .animate-float-fast {
    animation: float-fast 3s ease-in-out infinite;
  }
  
  .animate-pulse-glow {
    animation: pulse-glow 2s ease-in-out infinite;
  }

  /* Efek untuk gambar aktif */
  .image-glow {
    filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.4));
  }

  /* Reduced motion support */
  @media (prefers-reduced-motion: reduce) {
    .animate-float-slow,
    .animate-float-medium,
    .animate-float-fast,
    .animate-pulse-glow {
      animation: none;
    }
  }
</style>
@endpush

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const rotator = document.querySelector('[data-rotator]');
    if (!rotator) return;

    const items = Array.from(rotator.querySelectorAll('[data-rotator-item]'));
    const floatingElements = Array.from(rotator.querySelectorAll('[data-float-1], [data-float-2], [data-float-3]'));
    
    if (items.length <= 1) return;

    let currentIndex = 0;
    const intervalTime = 4000; // Lebih lambat untuk efek yang lebih smooth
    let intervalId = null;

    // Array efek transisi yang berbeda-beda
    const transitions = [
      // Efek zoom + fade
      {
        out: (item) => {
          item.classList.add('opacity-0', 'scale-125', 'blur-md');
          item.classList.remove('opacity-100', 'scale-100', 'blur-0');
        },
        in: (item) => {
          item.classList.remove('opacity-0', 'scale-95', 'blur-sm');
          item.classList.add('opacity-100', 'scale-100', 'blur-0');
        }
      },
      // Efek rotate + slide
      {
        out: (item) => {
          item.classList.add('opacity-0', 'rotate-12', 'translate-x-8');
          item.classList.remove('opacity-100', 'rotate-0');
        },
        in: (item) => {
          item.classList.remove('opacity-0', 'rotate-3', 'blur-sm');
          item.classList.add('opacity-100', 'rotate-0', 'blur-0');
        }
      },
      // Efek flip + scale
      {
        out: (item) => {
          item.classList.add('opacity-0', 'scale-75', '-rotate-6', 'blur-lg');
          item.classList.remove('opacity-100', 'scale-100', 'rotate-0', 'blur-0');
        },
        in: (item) => {
          item.classList.remove('opacity-0', 'scale-110', '-rotate-2', 'blur-sm');
          item.classList.add('opacity-100', 'scale-100', 'rotate-0', 'blur-0');
        }
      }
    ];

    function setActive(nextIndex) {
      const currentItem = items[currentIndex];
      const nextItem = items[nextIndex];
      
      // Pilih efek transisi secara acak
      const transition = transitions[Math.floor(Math.random() * transitions.length)];
      
      // Hapus efek glow dari item saat ini
      currentItem.classList.remove('image-glow');
      
      // Terapkan efek keluar
      transition.out(currentItem);
      
      // Setelah delay singkat, terapkan efek masuk
      setTimeout(() => {
        transition.in(nextItem);
        // Tambahkan efek glow ke item baru
        nextItem.classList.add('image-glow');
        
        // Animasi floating elements
        animateFloatingElements();
      }, 200);

      currentIndex = nextIndex;
    }

    function animateFloatingElements() {
      // Random animasi untuk floating elements
      floatingElements.forEach((element, index) => {
        const randomDelay = Math.random() * 1000;
        const randomDuration = 2000 + (Math.random() * 2000);
        
        setTimeout(() => {
          element.style.transition = `transform ${randomDuration}ms ease-in-out`;
          const randomX = (Math.random() - 0.5) * 40;
          const randomY = (Math.random() - 0.5) * 40;
          const randomRotate = Math.random() * 360;
          const randomScale = 0.8 + (Math.random() * 0.4);
          
          element.style.transform = `translateX(${randomX}px) translateY(${randomY}px) rotate(${randomRotate}deg) scale(${randomScale})`;
          
          // Reset setelah animasi selesai
          setTimeout(() => {
            element.style.transform = '';
          }, randomDuration);
        }, randomDelay);
      });
    }

    function rotate() {
      const nextIndex = (currentIndex + 1) % items.length;
      setActive(nextIndex);
    }

    function play() {
      if (intervalId) return;
      intervalId = setInterval(rotate, intervalTime);
    }

    function stop() {
      if (!intervalId) return;
      clearInterval(intervalId);
      intervalId = null;
    }

    // Inisialisasi
    setActive(0);
    items[0].classList.add('image-glow');
    play();

    // Pause saat hover dengan efek visual
    rotator.addEventListener('mouseenter', () => {
      stop();
      rotator.style.transform = 'scale(1.02)';
      rotator.style.transition = 'transform 0.3s ease';
    });
    
    rotator.addEventListener('mouseleave', () => {
      play();
      rotator.style.transform = 'scale(1)';
    });

    // Respect prefers-reduced-motion
    try {
      const prm = window.matchMedia('(prefers-reduced-motion: reduce)');
      if (prm.matches) {
        stop();
        // Matikan floating animations
        floatingElements.forEach(el => {
          el.style.animation = 'none';
        });
      }
      
      const handleChange = (e) => {
        if (e.matches) {
          stop();
          floatingElements.forEach(el => {
            el.style.animation = 'none';
          });
        } else {
          play();
          floatingElements.forEach((el, index) => {
            const animations = ['animate-float-slow', 'animate-float-medium', 'animate-float-fast'];
            el.className = el.className.replace(/animate-float-\w+/, animations[index]);
          });
        }
      };

      if (prm.addEventListener) {
        prm.addEventListener('change', handleChange);
      } else if (prm.addListener) {
        prm.addListener(handleChange);
      }
    } catch (_) {}

    // Tambahkan interaksi click untuk manual navigation
    items.forEach((item, index) => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
        if (index !== currentIndex) {
          stop();
          setActive(index);
          setTimeout(play, 1000); // Resume setelah 1 detik
        }
      });
    });
  });
</script>
@endpush
@endsection