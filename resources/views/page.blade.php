@extends('layouts.nyoba')
@section('content')

<section class="relative isolate overflow-hidden bg-[#FAF9F6] text-black">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-6 py-24 md:grid-cols-2 lg:px-8">
      <!-- Teks kiri -->
      <div class="relative z-10">
        <h1 class="text-5xl font-extrabold leading-tight sm:text-6xl md:text-7xl">
          Eat Healthy with<br />
          Nutrio Restaurant
        </h1>
        <p class="mt-6 max-w-xl text-base text-gray-700">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta error eveniet, fugit numquam iste dolorum.
        </p>
        <a
          href="#order"
          class="mt-8 inline-flex items-center justify-center rounded-md bg-orange-500 px-6 py-3 text-sm font-semibold text-white shadow hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2 focus:ring-offset-[#FAF9F6]"
          >Order online</a
        >
      </div>
  
      <!-- Gambar kanan (crossfade) -->
      <div class="relative aspect-square min-h-[360px] w-full max-w-xl place-self-end md:place-self-center">
        
        <!-- Dua layer untuk crossfade -->
        <img
          id="slideA"
          alt="Sports jersey mockup"
          class="absolute inset-0 m-auto h-full w-full max-w-full rounded-full object-contain opacity-100 transition-opacity duration-700 ease-in-out"
          referrerpolicy="no-referrer"
        />
        <img
          id="slideB"
          alt="Sports jersey mockup"
          class="absolute inset-0 m-auto h-full w-full max-w-full rounded-full object-contain opacity-0 transition-opacity duration-700 ease-in-out"
          referrerpolicy="no-referrer"
        />
      </div>
    </div>
  
    <script>
      (function () {
        const sources = [
          "https://png.pngtree.com/png-vector/20240131/ourmid/pngtree-white-and-blue-sports-jersey-mockup-front-and-back-view-generative-png-image_11520507.png",
          "https://png.pngtree.com/png-vector/20230921/ourmid/pngtree-white-and-yellow-sports-jersey-mockup-front-and-back-view-generative-png-image_10143284.png",
        ];
  
        const imgA = document.getElementById("slideA");
        const imgB = document.getElementById("slideB");
  
        function loadWithFallback(imgEl, url) {
          return new Promise((resolve) => {
            let done = false;
            const finish = (ok) => { if (!done) { done = true; resolve(ok); } };
  
            imgEl.src = url;
            const t = setTimeout(async () => {
              if (done) return;
              try {
                const res = await fetch(url, { referrerPolicy: "no-referrer" });
                if (!res.ok) throw new Error("HTTP " + res.status);
                const blob = await res.blob();
                const localUrl = URL.createObjectURL(blob);
                imgEl.src = localUrl;
                finish(true);
              } catch (e) {
                finish(false);
              }
            }, 2500);
  
            imgEl.onload = () => { clearTimeout(t); finish(true); };
          });
        }
  
        (async () => {
          await loadWithFallback(imgA, sources[0]);
          await loadWithFallback(imgB, sources[1]);
        })();
  
        let idx = 0;
        let showA = true;
  
        function crossfade() {
          idx = (idx + 1) % sources.length;
          if (showA) {
            loadWithFallback(imgB, sources[idx]).then(() => {
              imgA.classList.replace("opacity-100", "opacity-0");
              imgB.classList.replace("opacity-0", "opacity-100");
              showA = false;
            });
          } else {
            loadWithFallback(imgA, sources[idx]).then(() => {
              imgB.classList.replace("opacity-100", "opacity-0");
              imgA.classList.replace("opacity-0", "opacity-100");
              showA = true;
            });
          }
        }
  
        setInterval(crossfade, 4000);
      })();
    </script>
  </section>
  
@endsection
