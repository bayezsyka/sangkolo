<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Testimoni
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if($testimonial->image_proof)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <label class="block text-sm font-medium text-gray-700">Bukti Screenshot Saat Ini</label>
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $testimonial->image_proof) }}" alt="Bukti" class="h-40 w-auto rounded border p-1">
                        
                        {{-- Form untuk hapus gambar ini sekarang terpisah --}}
                        <form action="{{ route('admin.testimonials.image.destroy', $testimonial) }}" method="POST" class="mt-2" onsubmit="return confirm('Yakin ingin menghapus gambar ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-xs text-red-600 hover:text-red-800 font-semibold">Hapus Gambar</button>
                        </form>
                    </div>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    @include('admin.testimonials._form')

                    <div class="mt-6">
                        <button type="submit" id="submit-button" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 disabled:bg-gray-400 disabled:cursor-not-allowed">
                            Update Data
                        </button>
                        <a href="{{ route('admin.testimonials.index') }}" class="ml-4 text-gray-600">Batal</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{-- Hanya jalankan skrip FilePond jika tidak ada gambar --}}
    @if(!$testimonial->image_proof)
    @push('scripts')
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const inputElement = document.querySelector('input[id="image_proof_file"]');
        const submitButton = document.getElementById('submit-button');
        const imagePathInput = document.getElementById('image_proof_path');

        if (inputElement) {
            const pond = FilePond.create(inputElement, {
                labelIdle: `Seret & Lepas file atau <span class="filepond--label-action">Jelajahi</span>`,
            });
            
            // Di halaman edit, tombol update aktif di awal
            submitButton.disabled = false;
            
            pond.on('addfile', () => {
                submitButton.disabled = true; // Nonaktifkan saat mulai memproses file baru
            });

            pond.on('processfile', (error, file) => {
                if (error) {
                    imagePathInput.value = '';
                    submitButton.disabled = true;
                    return;
                }
                imagePathInput.value = file.serverId;
                submitButton.disabled = false; // Aktifkan lagi setelah upload sementara selesai
            });
            
            pond.on('removefile', () => {
                imagePathInput.value = '';
                submitButton.disabled = true;
            });

            FilePond.setOptions({
                server: {
                    process: {
                        url: '{{ route('admin.testimonials.upload') }}',
                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                    }
                }
            });
        }
    </script>
    @endpush
    @endif
</x-app-layout>