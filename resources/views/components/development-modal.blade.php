{{-- resources/views/components/development-modal.blade.php --}}

{{-- 
  Kita tambahkan class 'modal-target' dan id 'modal-pengembangan'.
  Tidak ada lagi Alpine.js (x-data, x-show, dll).
--}}
<div id="modal-pengembangan" class="modal-target fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 p-4">

    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-sm text-center relative">

        {{-- Tombol close sekarang adalah link ke '#' untuk menghapus target dari URL --}}
        <a href="#" class="absolute top-2 right-4 text-2xl text-gray-500 hover:text-gray-800">&times;</a>

        <h2 class="text-2xl font-bold text-sangkolo-black mb-3">
            Segera Hadir
        </h2>
        <p class="text-sangkolo-dark mb-6">
            Maaf, halaman atau fitur ini sedang dalam pengembangan.
        </p>

        <a href="#" class="bg-sangkolo-black text-white font-semibold py-2 px-6 rounded-lg hover:bg-sangkolo-dark transition duration-300">
            Oke, Saya Mengerti
        </a>
    </div>
</div>