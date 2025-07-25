<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Testimoni Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.testimonials.store') }}" method="POST" class="form-submit-loading">
                    @csrf
                    
                    {{-- Cukup panggil _form, karena uploader sudah ada di dalamnya --}}
                    @include('admin.testimonials._form')

                    <div class="mt-6">
                        <button type="submit" id="submit-button" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 disabled:bg-gray-400 disabled:cursor-not-allowed">
                            Simpan
                        </button>
                        <a href="{{ route('admin.testimonials.index') }}" class="ml-4 text-gray-600">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        const inputElement = document.querySelector('input[id="image_proof_file"]');
        const submitButton = document.getElementById('submit-button');
        const imagePathInput = document.getElementById('image_proof_path');

        const pond = FilePond.create(inputElement, {
            labelIdle: `Seret & Lepas file atau <span class="filepond--label-action">Jelajahi</span>`,
        });

        // Nonaktifkan tombol simpan di awal
        submitButton.disabled = true;

        // Setelah proses upload ke server selesai
        pond.on('processfile', (error, file) => {
            if (error) {
                console.error('Upload Gagal!');
                imagePathInput.value = '';
                submitButton.disabled = true; 
                return;
            }
            // Isi hidden input dengan path file sementara
            imagePathInput.value = file.serverId;
            // Aktifkan kembali tombol simpan
            submitButton.disabled = false;
        });
        
        // Jika file dihapus dari preview
        pond.on('removefile', () => {
            imagePathInput.value = '';
            submitButton.disabled = true;
        });

        FilePond.setOptions({
            server: {
                process: {
                    url: '{{ route('admin.testimonials.upload') }}',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            }
        });
    </script>
    @endpush
</x-app-layout>