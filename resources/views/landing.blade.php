@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-[#383838] text-[#aeaeae] overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('https://tailwindui.com/img/component/abstract-shapes/hero-1.svg')] bg-[length:80rem] bg-top bg-no-repeat mix-blend-overlay"></div>
        </div>
        
        <div class="container mx-auto px-6 py-28 sm:py-36 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight text-white">
                    <span class="block">Solusi Kreatif Profesional</span>
                    <span class="block">Untuk Bisnis Anda</span>
                </h1>
                <p class="mt-6 text-lg md:text-xl text-[#aeaeae] max-w-3xl mx-auto">
                    Kami menyediakan layanan profesional mulai dari desain grafis, pembuatan kaos custom, hingga joki tugas akademik dengan kualitas terbaik.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services" class="px-8 py-3.5 bg-[#5c5c5c] hover:bg-[#909090] text-white font-semibold rounded-lg text-lg transition-all duration-300 shadow-lg transform hover:scale-[1.02]">
                        Jelajahi Layanan
                    </a>
                    <a href="#" class="px-8 py-3.5 border-2 border-[#5c5c5c] text-white font-semibold rounded-lg text-lg hover:bg-[#5c5c5c]/30 transition-all duration-300 transform hover:scale-[1.02]">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-[#383838] to-transparent"></div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-[#383838]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-semibold text-[#aeaeae] bg-[#5c5c5c] rounded-full mb-4">Layanan Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white">Solusi Profesional untuk Kebutuhan Anda</h2>
                <p class="text-[#aeaeae] mt-4 max-w-2xl mx-auto">Kami menyediakan berbagai layanan unggulan dengan kualitas terbaik.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Jasa Design -->
                <div class="group bg-[#5c5c5c] p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-[#909090]/20 hover:border-[#aeaeae]/30 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[#aeaeae]"></div>
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-[#909090]/10 rounded-lg group-hover:bg-[#aeaeae]/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white text-center mb-3">Jasa Desain Profesional</h3>
                    <p class="text-[#aeaeae] text-center mb-6">
                        Desain grafis kreatif untuk branding, sosial media, dan kebutuhan visual lainnya.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Desain Logo & Branding
                        </li>
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Social Media Design
                        </li>
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Desain Presentasi
                        </li>
                    </ul>
                    <a href="#" class="block text-center text-white font-medium hover:text-[#aeaeae] transition-colors duration-300">
                        Pelajari lebih lanjut →
                    </a>
                </div>

                <!-- Kaos Custom -->
                <div class="group bg-[#5c5c5c] p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-[#909090]/20 hover:border-[#aeaeae]/30 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[#aeaeae]"></div>
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-[#909090]/10 rounded-lg group-hover:bg-[#aeaeae]/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white text-center mb-3">Kaos Custom Berkualitas</h3>
                    <p class="text-[#aeaeae] text-center mb-6">
                        Desain kaos custom sesuai keinginan Anda dengan bahan premium.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Desain Eksklusif
                        </li>
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Bahan Premium
                        </li>
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Minimal Order 6 pcs
                        </li>
                    </ul>
                    <a href="#" class="block text-center text-white font-medium hover:text-[#aeaeae] transition-colors duration-300">
                        Pelajari lebih lanjut →
                    </a>
                </div>

                <!-- Joki Tugas -->
                <div class="group bg-[#5c5c5c] p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border border-[#909090]/20 hover:border-[#aeaeae]/30 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-[#aeaeae]"></div>
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-[#909090]/10 rounded-lg group-hover:bg-[#aeaeae]/20 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white text-center mb-3">Joki Tugas Akademik</h3>
                    <p class="text-[#aeaeae] text-center mb-6">
                        Bantuan penyelesaian tugas kuliah dengan kualitas terjamin.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Berbagai Disiplin Ilmu
                        </li>
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Original & Plagiarism Check
                        </li>
                        <li class="flex items-center text-[#aeaeae]">
                            <svg class="w-5 h-5 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Revisi Gratis
                        </li>
                    </ul>
                    <a href="#" class="block text-center text-white font-medium hover:text-[#aeaeae] transition-colors duration-300">
                        Pelajari lebih lanjut →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#5c5c5c]">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="inline-block px-3 py-1 text-sm font-semibold text-[#aeaeae] bg-[#383838] rounded-full mb-4">Testimonial</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white">Apa Kata Klien Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @forelse ($testimonials as $testimonial)
                <div class="bg-[#383838] rounded-xl shadow-lg overflow-hidden group">
                    {{-- Bagian Gambar Bukti --}}
                    <div class="aspect-w-16 aspect-h-9">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" 
                             src="{{ asset('storage/' . $testimonial->image_proof) }}" 
                             alt="Testimoni dari {{ $testimonial->customer_name }}">
                    </div>

                    {{-- Bagian Detail Teks --}}
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">{{ $testimonial->customer_name }}</h3>
                        <p class="text-md text-[#aeaeae] mt-1">{{ $testimonial->customer_origin }}</p>
                        <p class="mt-4 text-sm font-semibold text-white bg-[#5c5c5c] inline-block px-3 py-1 rounded-md">
                            Jasa: {{ $testimonial->service_used }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-white">
                    <p>Belum ada testimoni yang bisa ditampilkan.</p>
                </div>
                @endforelse
                
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-[#383838] text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">Siap Mewujudkan Ide Anda?</h2>
            <p class="text-lg text-[#aeaeae] max-w-2xl mx-auto mb-8">Hubungi kami sekarang dan dapatkan konsultasi gratis untuk proyek Anda.</p>
            <a href="#" class="inline-block px-8 py-3.5 bg-[#5c5c5c] hover:bg-[#909090] text-white font-semibold rounded-lg text-lg transition-all duration-300 shadow-lg transform hover:scale-[1.02]">
                Hubungi Kami
            </a>
        </div>
    </section>
@endsection