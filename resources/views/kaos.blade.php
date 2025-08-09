@extends('layouts.main')

@section('content')
<section class="min-h-screen bg-sangkolo-dark text-white p-6">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">KUSTOM KAOS SATUAN & GROSIR</h1>
        <p class="text-xl text-sangkolo-light max-w-3xl mx-auto">Desain kaos sesuai keinginan Anda, mulai dari 1 potong sampai ribuan, dengan kualitas premium dan harga terjangkau</p>
      </div>
  
      <!-- Keunggulan -->
      <div class="grid md:grid-cols-3 gap-8 mb-16">
        <div class="bg-sangkolo-black p-6 rounded-xl shadow-lg">
          <div class="text-4xl mb-4">🖌️</div>
          <h3 class="text-xl font-bold mb-2">Desain Bebas</h3>
          <p class="text-sangkolo-light">Tentukan sendiri desain kaos Anda, dari teks sederhana sampai grafis kompleks</p>
        </div>
        <div class="bg-sangkolo-black p-6 rounded-xl shadow-lg">
          <div class="text-4xl mb-4">👕</div>
          <h3 class="text-xl font-bold mb-2">Bahan Premium</h3>
          <p class="text-sangkolo-light">Kaos dari bahan katun combed 30s yang nyaman, adem, dan tahan lama</p>
        </div>
        <div class="bg-sangkolo-black p-6 rounded-xl shadow-lg">
          <div class="text-4xl mb-4">🚚</div>
          <h3 class="text-xl font-bold mb-2">Kirim Ke Mana Saja</h3>
          <p class="text-sangkolo-light">Pengiriman ke seluruh Indonesia dengan berbagai pilihan ekspedisi</p>
        </div>
      </div>
  
      <!-- Proses Pembuatan -->
      <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">PROSES PEMBUATAN</h2>
        <div class="relative">
          <!-- Timeline -->
          <div class="hidden md:block absolute left-1/2 h-full w-1 bg-sangkolo-light transform -translate-x-1/2"></div>
          
          <!-- Step 1 -->
          <div class="relative mb-12 md:flex items-center">
            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
              <h3 class="text-2xl font-bold mb-2">1. Desain Kaos</h3>
              <p class="text-sangkolo-light">Kirim desain Anda atau konsultasikan dengan tim desainer kami</p>
            </div>
            <div class="hidden md:flex items-center justify-center w-16 h-16 rounded-full bg-sangkolo-mid mx-auto text-2xl font-bold z-10">1</div>
            <div class="md:w-1/2 md:pl-12">
              <div class="bg-sangkolo-black p-6 rounded-xl h-full">
                <img src="https://via.placeholder.com/400x200/5c5c5c/ffffff?text=Upload+Design" alt="Desain Kaos" class="w-full rounded-lg mb-4">
              </div>
            </div>
          </div>
  
          <!-- Step 2 -->
          <div class="relative mb-12 md:flex items-center">
            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 order-2">
              <h3 class="text-2xl font-bold mb-2">2. Konfirmasi & Pembayaran</h3>
              <p class="text-sangkolo-light">Setelah desain disetujui, lakukan pembayaran untuk memulai produksi</p>
            </div>
            <div class="hidden md:flex items-center justify-center w-16 h-16 rounded-full bg-sangkolo-mid mx-auto text-2xl font-bold z-10 order-1">2</div>
            <div class="md:w-1/2 md:pl-12 order-0">
              <div class="bg-sangkolo-black p-6 rounded-xl h-full">
                <img src="https://via.placeholder.com/400x200/5c5c5c/ffffff?text=Konfirmasi+Pembayaran" alt="Konfirmasi Pembayaran" class="w-full rounded-lg mb-4">
              </div>
            </div>
          </div>
  
          <!-- Step 3 -->
          <div class="relative mb-12 md:flex items-center">
            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 md:text-right">
              <h3 class="text-2xl font-bold mb-2">3. Produksi Kaos</h3>
              <p class="text-sangkolo-light">Proses cetak dengan teknologi DTG (Direct to Garment) untuk hasil terbaik</p>
            </div>
            <div class="hidden md:flex items-center justify-center w-16 h-16 rounded-full bg-sangkolo-mid mx-auto text-2xl font-bold z-10">3</div>
            <div class="md:w-1/2 md:pl-12">
              <div class="bg-sangkolo-black p-6 rounded-xl h-full">
                <img src="https://via.placeholder.com/400x200/5c5c5c/ffffff?text=Proses+Produksi" alt="Proses Produksi" class="w-full rounded-lg mb-4">
              </div>
            </div>
          </div>
  
          <!-- Step 4 -->
          <div class="relative md:flex items-center">
            <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0 order-2">
              <h3 class="text-2xl font-bold mb-2">4. Pengiriman</h3>
              <p class="text-sangkolo-light">Kaos siap dikirim atau bisa diambil langsung di workshop kami</p>
            </div>
            <div class="hidden md:flex items-center justify-center w-16 h-16 rounded-full bg-sangkolo-mid mx-auto text-2xl font-bold z-10 order-1">4</div>
            <div class="md:w-1/2 md:pl-12 order-0">
              <div class="bg-sangkolo-black p-6 rounded-xl h-full">
                <img src="https://via.placeholder.com/400x200/5c5c5c/ffffff?text=Pengiriman+Kaos" alt="Pengiriman Kaos" class="w-full rounded-lg mb-4">
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Pilihan Paket -->
      <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">PILIHAN PAKET</h2>
        <div class="grid md:grid-cols-3 gap-6">
          <!-- Paket Satuan -->
          <div class="bg-sangkolo-black rounded-xl overflow-hidden shadow-xl transform hover:scale-105 transition duration-300">
            <div class="bg-sangkolo-mid p-4 text-center">
              <h3 class="text-2xl font-bold">SATUAN</h3>
              <p class="text-sm">Cocok untuk kebutuhan personal</p>
            </div>
            <div class="p-6">
              <div class="text-4xl font-bold mb-4">Rp 99rb<span class="text-lg">/kaos</span></div>
              <ul class="space-y-3 mb-6">
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Minimal order 1 kaos</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Bahan katun combed 30s</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Warna kaos pilihan</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Cetak 1 sisi</span>
                </li>
              </ul>
            </div>
          </div>
  
          <!-- Paket Grup -->
          <div class="bg-sangkolo-black rounded-xl overflow-hidden shadow-xl transform hover:scale-105 transition duration-300 border-2 border-sangkolo-light">
            <div class="bg-sangkolo-light text-sangkolo-black p-4 text-center">
              <h3 class="text-2xl font-bold">GRUP</h3>
              <p class="text-sm">Cocok untuk komunitas/kantor</p>
            </div>
            <div class="p-6">
              <div class="text-4xl font-bold mb-4">Rp 79rb<span class="text-lg">/kaos</span></div>
              <ul class="space-y-3 mb-6">
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Minimal order 12 kaos</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Bahan katun combed 30s</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Warna kaos pilihan</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Cetak 2 sisi gratis</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Free 1 design</span>
                </li>
              </ul>
            </div>
          </div>
  
          <!-- Paket Event -->
          <div class="bg-sangkolo-black rounded-xl overflow-hidden shadow-xl transform hover:scale-105 transition duration-300">
            <div class="bg-sangkolo-mid p-4 text-center">
              <h3 class="text-2xl font-bold">EVENT</h3>
              <p class="text-sm">Cocok untuk acara besar</p>
            </div>
            <div class="p-6">
              <div class="text-4xl font-bold mb-4">Rp 59rb<span class="text-lg">/kaos</span></div>
              <ul class="space-y-3 mb-6">
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Minimal order 50 kaos</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Bahan katun combed 30s</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Warna kaos pilihan</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Cetak 2 sisi gratis</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Free design + revisi</span>
                </li>
                <li class="flex items-start">
                  <span class="text-sangkolo-light mr-2">✓</span>
                  <span>Diskon ongkir 50%</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <!-- FAQ -->
      <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">PERTANYAAN UMUM</h2>
        <div class="max-w-3xl mx-auto">
          <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-sangkolo-black rounded-lg overflow-hidden">
              <button class="faq-toggle w-full flex justify-between items-center p-4 text-left">
                <span class="font-medium">Berapa lama proses pembuatan kaos custom?</span>
                <span class="text-xl">+</span>
              </button>
              <div class="faq-content hidden px-4 pb-4 text-sangkolo-light">
                <p>Proses produksi membutuhkan waktu 3-5 hari kerja setelah desain disetujui dan pembayaran diterima. Untuk pesanan besar (>50 kaos) membutuhkan waktu 5-7 hari kerja.</p>
              </div>
            </div>
  
            <!-- FAQ Item 2 -->
            <div class="bg-sangkolo-black rounded-lg overflow-hidden">
              <button class="faq-toggle w-full flex justify-between items-center p-4 text-left">
                <span class="font-medium">Apakah bisa membuat desain sendiri?</span>
                <span class="text-xl">+</span>
              </button>
              <div class="faq-content hidden px-4 pb-4 text-sangkolo-light">
                <p>Tentu bisa! Anda dapat mengirimkan desain sendiri dalam format JPG/PNG/PDF dengan resolusi tinggi. Jika membutuhkan bantuan desain, tim kami siap membantu dengan tambahan biaya Rp 50.000/desain.</p>
              </div>
            </div>
  
            <!-- FAQ Item 3 -->
            <div class="bg-sangkolo-black rounded-lg overflow-hidden">
              <button class="faq-toggle w-full flex justify-between items-center p-4 text-left">
                <span class="font-medium">Bagaimana cara menentukan ukuran yang tepat?</span>
                <span class="text-xl">+</span>
              </button>
              <div class="faq-content hidden px-4 pb-4 text-sangkolo-light">
                <p>Kami menyediakan panduan ukuran detail untuk semua produk. Anda juga bisa meminta sample ukuran sebelum memesan dalam jumlah banyak. Untuk kaos couple/family, kami sarankan memilih satu ukuran lebih besar dari biasanya.</p>
              </div>
            </div>
  
            <!-- FAQ Item 4 -->
            <div class="bg-sangkolo-black rounded-lg overflow-hidden">
              <button class="faq-toggle w-full flex justify-between items-center p-4 text-left">
                <span class="font-medium">Apakah bisa pesan kaos dengan sablon manual?</span>
                <span class="text-xl">+</span>
              </button>
              <div class="faq-content hidden px-4 pb-4 text-sangkolo-light">
                <p>Kami khusus menggunakan teknologi DTG (Direct to Garment) yang lebih presisi, tahan lama, dan bisa mencetak desain full color dengan detail tinggi. Sablon manual hanya kami sarankan untuk pesanan sangat besar (>500 pcs) dengan desain sederhana.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- CTA -->
      <div class="bg-sangkolo-black rounded-xl p-8 text-center">
        <h2 class="text-3xl font-bold mb-4">SIAP MEMBUAT KAOS CUSTOM ANDA?</h2>
        <p class="text-xl text-sangkolo-light mb-6 max-w-2xl mx-auto">Mulai dari 1 kaos sampai ribuan, kami siap mewujudkan desain kaos impian Anda</p>
        <button class="bg-sangkolo-light text-sangkolo-black font-bold py-3 px-8 rounded-lg hover:bg-white transition duration-300">
          PESAN SEKARANG
        </button>
      </div>
    </div>
  </section>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // FAQ Toggle
      document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', function() {
          const content = this.nextElementSibling;
          const icon = this.querySelector('span:last-child');
          
          // Toggle content
          content.classList.toggle('hidden');
          
          // Change icon
          if (content.classList.contains('hidden')) {
            icon.textContent = '+';
          } else {
            icon.textContent = '-';
          }
          
          // Close other FAQs
          document.querySelectorAll('.faq-content').forEach(item => {
            if (item !== content && !item.classList.contains('hidden')) {
              item.classList.add('hidden');
              item.previousElementSibling.querySelector('span:last-child').textContent = '+';
            }
          });
        });
      });
    });
  </script>
@endsection