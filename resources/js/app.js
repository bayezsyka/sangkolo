import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swal from 'sweetalert2';
window.Swal = Swal;

// Menangani semua form dengan class 'form-delete'
document.addEventListener('DOMContentLoaded', () => {
    const deleteForms = document.querySelectorAll('.form-delete');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah form langsung submit

            Swal.fire({
                title: 'Anda Yakin?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Jika dikonfirmasi, submit form
                }
            });
        });
    });
});

// Menangani form dengan class 'form-submit-loading'
document.addEventListener('DOMContentLoaded', () => {
    const loadingForms = document.querySelectorAll('.form-submit-loading');
    loadingForms.forEach(form => {
        form.addEventListener('submit', function () {
            Swal.fire({
                title: 'Memproses Data...',
                text: 'Mohon tunggu sebentar.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        });
    });
});