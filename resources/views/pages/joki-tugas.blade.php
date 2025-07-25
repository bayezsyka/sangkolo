@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-sangkolo-black via-gray-900 to-sangkolo-dark overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="relative mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-32">
            <div class="mx-auto max-w-4xl text-center">
                <!-- Main Title with Gradient -->
                <h1 class="text-5xl font-bold tracking-tight sm:text-6xl lg:text-7xl">
                    <span class="bg-gradient-to-r from-white via-gray-200 to-gray-300 bg-clip-text text-transparent">
                        Temukan Joker
                    </span>
                    <br>
                    <span class="bg-gradient-to-r from-gray-100 via-gray-300 to-gray-500 bg-clip-text text-transparent">
                        Terbaikmu
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="mt-8 text-xl leading-8 text-gray-300 font-light">
                    Dapatkan bantuan mengerjakan tugas dari para Joker terverifikasi yang siap membantu tugas-tugasmu dengan profesional dan terpercaya.
                </p>

                <!-- CTA Button -->
                <div class="mt-10">
                    <a href="#jokers-list" class="inline-flex items-center px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-sangkolo-black to-sangkolo-dark rounded-full hover:from-gray-800 hover:to-gray-900 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Mulai Konsultasi
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-gray-700 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-16 h-16 bg-gray-600 rounded-full opacity-20 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-20 w-12 h-12 bg-gray-500 rounded-full opacity-20 animate-pulse delay-500"></div>
    </div>

    <!-- Info Section -->
    <div class="bg-white py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl">
                <!-- What is Joker Section -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-sangkolo-black sm:text-4xl mb-8">
                        Apa itu Joker? 🃏
                    </h2>
                    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-3xl p-8 shadow-lg border border-gray-200">
                        <p class="text-lg leading-8 text-sangkolo-dark mb-6">
                            <strong>Joker</strong> adalah penjoki yang diplesetkan jadi Joker hanya untuk asik-asikan saja. 
                            Mereka adalah para penjoki berpengalaman yang siap mengerjakan tugas-tugasmu!
                        </p>
                        
                        <!-- Capabilities Grid -->
                        <div class="grid md:grid-cols-2 gap-6 mt-8">
                            <div class="bg-white rounded-2xl p-6 shadow-md border-l-4 border-sangkolo-black">
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-sangkolo-black" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="ml-3 text-lg font-semibold text-sangkolo-black">SD - SMA</h3>
                                </div>
                                <p class="text-sangkolo-dark">Joker bisa semua mata pelajaran dari tingkat Sekolah Dasar hingga Sekolah Menengah Atas.</p>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-md border-l-4 border-gray-500">
                                <div class="flex items-center mb-3">
                                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="ml-3 text-lg font-semibold text-sangkolo-black">Mata Kuliah</h3>
                                </div>
                                <p class="text-sangkolo-dark">Kalau mata kuliah sesuai dengan jurusan dan keahlian yang sudah tertera di masing-masing profil Joker.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How to Order Section -->
    <div class="bg-gray-50 py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-sangkolo-black sm:text-4xl mb-4">
                        Cara Order 📋
                    </h2>
                    <p class="text-lg leading-8 text-sangkolo-dark max-w-2xl mx-auto">
                        Ikuti langkah-langkah mudah berikut untuk mendapatkan bantuan dari Joker pilihan mu
                    </p>
                </div>

                <!-- Steps Grid -->
                <div class="grid gap-8 md:gap-12">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-sangkolo-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                1
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200">
                                <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Klik Konsultasikan Tugas</h3>
                                <p class="text-sangkolo-dark">Pilih Joker yang sesuai dengan kebutuhan mu dan klik tombol "Konsultasi" untuk memulai chat WhatsApp.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-sangkolo-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                2
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200">
                                <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Kirim Tugas dan Jelaskan Detail</h3>
                                <p class="text-sangkolo-dark">Kirimkan foto/file tugas yang ingin dikerjakan beserta penjelasan detail dan deadline pengerjaan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-sangkolo-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                3
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200">
                                <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Penentuan Harga</h3>
                                <p class="text-sangkolo-dark">Joker akan memberikan estimasi harga berdasarkan tingkat kesulitan dan deadline tugas mu.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-sangkolo-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                4
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200">
                                <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Bayar</h3>
                                <p class="text-sangkolo-dark">Lakukan pembayaran sesuai dengan harga yang telah disepakati melalui metode pembayaran yang tersedia.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-sangkolo-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                5
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200">
                                <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Proses Pengerjaan Tugas</h3>
                                <p class="text-sangkolo-dark">Joker akan mulai mengerjakan tugas mu sesuai dengan deadline yang telah disepakati.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-sangkolo-black text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg">
                                6
                            </div>
                        </div>
                        <div class="ml-6 flex-1">
                            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-200">
                                <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Revisi (Hanya 1x)</h3>
                                <p class="text-sangkolo-dark">Setelah tugas selesai, kamu bisa meminta revisi maksimal 1 kali jika ada yang perlu diperbaiki.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="mt-12 text-center">
                    <div class="bg-gray-100 rounded-2xl p-6 border border-gray-300">
                        <h3 class="text-lg font-semibold text-sangkolo-black mb-2">💡 Info Tambahan</h3>
                        <p class="text-sangkolo-dark">
                            Diperbolehkan apabila hanya untuk bertanya-tanya harga tanpa harus langsung order. 
                            Jangan ragu untuk konsultasi terlebih dahulu!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jokers Section -->
    <div id="jokers-list" class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold tracking-tight text-sangkolo-black sm:text-4xl mb-4">
                    Para Joker Terbaik Kami
                </h2>
                <p class="text-lg leading-8 text-sangkolo-dark max-w-2xl mx-auto">
                    Pilih Joker yang sesuai dengan kebutuhanmu dan mulai konsultasi sekarang juga!
                </p>
            </div>

            {{-- Daftar Kartu Joker --}}
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @forelse ($jokers as $joker)
                    <article class="group relative flex flex-col bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-200 transform hover:-translate-y-2">
                        <!-- Card Header with Gradient -->
                        <div class="h-2 bg-gradient-to-r from-sangkolo-black via-gray-600 to-sangkolo-dark"></div>
                        
                        <div class="p-8 flex-1 flex flex-col">
                            <!-- Status Badge -->
                            <div class="flex justify-between items-start mb-4">
                                @if ($joker->is_busy)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-200 text-gray-800">
                                        <div class="w-2 h-2 bg-gray-500 rounded-full mr-2 animate-pulse"></div>
                                        Sedang Sibuk
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-800 text-white">
                                        <div class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></div>
                                        Tersedia
                                    </span>
                                @endif
                                
                                <!-- Joker Icon -->
                                <div class="w-12 h-12 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center">
                                    <span class="text-2xl">🃏</span>
                                </div>
                            </div>

                            <!-- Joker Info -->
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-sangkolo-black mb-2 group-hover:text-sangkolo-dark transition-colors">
                                    {{ $joker->nickname }}
                                </h3>
                                
                                <div class="flex items-center mb-4">
                                    <svg class="w-4 h-4 text-sangkolo-dark mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-sm font-semibold text-sangkolo-dark">
                                        Mahasiswa/i {{ $joker->major }}
                                    </p>
                                </div>

                                <!-- Skills Section -->
                                <div class="bg-gray-50 rounded-2xl p-4 mb-6">
                                    <div class="flex items-center mb-2">
                                        <svg class="w-4 h-4 text-sangkolo-black mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="text-sm font-bold text-sangkolo-black">Spesialisasi</span>
                                    </div>
                                    <p class="text-sm leading-relaxed text-gray-700">
                                        {{ $joker->skills }}
                                    </p>
                                </div>
                            </div>

                            {{-- Tombol Konsultasi --}}
                            <div class="mt-auto">
                                @if ($joker->is_busy)
                                    <button disabled class="w-full flex items-center justify-center bg-gray-100 text-gray-400 font-semibold py-4 px-6 rounded-2xl text-sm cursor-not-allowed border-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                        </svg>
                                        Sedang Sibuk
                                    </button>
                                @else
                                    @php
                                        $whatsappNumber = '6285161603362';
                                        $message = "Halo kak " . $joker->nickname . ", saya mau konsultasi tugas...";
                                        $whatsappLink = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
                                    @endphp
                                    <a href="{{ $whatsappLink }}" target="_blank" class="w-full flex items-center justify-center bg-gradient-to-r from-sangkolo-black to-sangkolo-dark text-white font-semibold py-4 px-6 rounded-2xl text-sm hover:from-gray-800 hover:to-gray-900 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 group">
                                        <svg class="w-4 h-4 mr-2 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                        </svg>
                                        Konsultasi dengan {{ $joker->nickname }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-1 lg:col-span-3">
                        <div class="text-center py-16 bg-white rounded-3xl shadow-lg border border-gray-200">
                            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-sangkolo-black mb-2">Belum Ada Joker Tersedia</h3>
                            <p class="text-lg text-sangkolo-dark mb-6">
                                Saat ini belum ada Joker yang tersedia. Silakan kembali lagi nanti untuk menemukan Joker terbaikmu!
                            </p>
                            <button class="inline-flex items-center px-6 py-3 text-sm font-medium text-sangkolo-black bg-gray-100 rounded-full hover:bg-gray-200 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                                </svg>
                                Refresh Halaman
                            </button>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-gradient-to-r from-sangkolo-black via-gray-900 to-sangkolo-dark py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Siap Mulai Order?
                </h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                    Jangan biarkan tugas menumpuk! Konsultasi dengan Joker pilihan mu sekarang dan selesaikan tugasmu dengan mudah.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#jokers-list" class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-sangkolo-black shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transition-all duration-300 hover:scale-105">
                        Pilih Joker Sekarang
                    </a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white hover:text-gray-300 transition-colors">
                        Pelajari lebih lanjut <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #333 0%, #666 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
@endsection