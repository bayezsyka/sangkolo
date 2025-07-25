@extends('layouts.main')

@section('content')

<!-- Hero Section with Parallax Effect -->
<section class="relative bg-[#383838] text-white overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-[#383838]/90 to-[#5c5c5c]/70 z-0"></div>
    <div class="container mx-auto px-6 py-24 sm:py-32 text-center max-w-5xl relative z-10">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight animate-fade-in">
            Solusi Kreatif Profesional<br>Untuk Bisnis Anda
        </h1>
        <p class="mt-6 text-[#aeaeae] text-lg sm:text-xl max-w-2xl mx-auto animate-slide-up">
            Layanan desain grafis, kaos custom, dan joki tugas akademik dengan kualitas terbaik untuk mewujudkan visi Anda.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
            <a href="#services" class="px-8 py-4 bg-[#5c5c5c] hover:bg-[#909090] text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                Jelajahi Layanan
            </a>
            <a href="https://wa.me/6285161603362" class="px-8 py-4 border border-[#5c5c5c] text-white hover:bg-[#5c5c5c]/50 font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
                Konsultasi Gratis
            </a>
        </div>
    </div>
</section>

<!-- Services Section with Glassmorphism -->
<section id="services" class="py-20 bg-[#383838]">
    <div class="container mx-auto px-6 max-w-5xl">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 text-sm font-semibold text-[#aeaeae] bg-[#5c5c5c]/50 backdrop-blur-sm rounded-full animate-slide-up">Layanan Kami</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-white animate-fade-in">Solusi Profesional</h2>
            <p class="mt-3 text-[#aeaeae] max-w-xl mx-auto">Transformasikan ide Anda menjadi kenyataan dengan layanan unggulan kami yang inovatif.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service Cards -->
            <div class="bg-[#5c5c5c]/40 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-14 h-14 mx-auto mb-6 bg-[#909090]/20 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white text-center mb-3">Jasa Desain</h3>
                <p class="text-[#aeaeae] text-base text-center mb-6">
                    Visual branding yang memukau untuk memperkuat identitas bisnis Anda.
                </p>
                <ul class="space-y-3 text-base text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Logo & Branding
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Desain Digital
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        UI/UX Modern
                    </li>
                </ul>
            </div>
            <div class="bg-[#5c5c5c]/40 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-14 h-14 mx-auto mb-6 bg-[#909090]/20 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white text-center mb-3">Pembuatan Website</h3>
                <p class="text-[#aeaeae] text-base text-center mb-6">
                    Hadirkan bisnis Anda secara digital dengan website profesional.
                </p>
                <ul class="space-y-3 text-base text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Responsive Design
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Optimasi SEO
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Maintenance
                    </li>
                </ul>
            </div>
            <div class="bg-[#5c5c5c]/40 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-14 h-14 mx-auto mb-6 bg-[#909090]/20 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white text-center mb-3">Perangkat IoT</h3>
                <p class="text-[#aeaeae] text-base text-center mb-6">
                    Solusi teknologi cerdas untuk efisiensi bisnis dan rumah Anda.
                </p>
                <ul class="space-y-3 text-base text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom Solution
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Smart Automation
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Integrasi Sistem
                    </li>
                </ul>
            </div>
            <div class="bg-[#5c5c5c]/40 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-14 h-14 mx-auto mb-6 bg-[#909090]/20 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white text-center mb-3">Fotografi & Videografi</h3>
                <p class="text-[#aeaeae] text-base text-center mb-6">
                    Abadikan momen berharga dengan kualitas profesional.
                </p>
                <ul class="space-y-3 text-base text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Event Documentation
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Product Shoot
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Video Profil
                    </li>
                </ul>
            </div>
            <div class="bg-[#5c5c5c]/40 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-14 h-14 mx-auto mb-6 bg-[#909090]/20 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white text-center mb-3">Kaos Custom</h3>
                <p class="text-[#aeaeae] text-base text-center mb-6">
                    Ekspresikan gaya unik Anda dengan desain eksklusif.
                </p>
                <ul class="space-y-3 text-base text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Desain Eksklusif
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Bahan Premium
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Order Fleksibel
                    </li>
                </ul>
            </div>
            <div class="bg-[#5c5c5c]/40 backdrop-blur-md p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-14 h-14 mx-auto mb-6 bg-[#909090]/20 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white text-center mb-3">Joki Tugas</h3>
                <p class="text-[#aeaeae] text-base text-center mb-6">
                    Solusi tepat untuk beban akademik yang menumpuk.
                </p>
                <ul class="space-y-3 text-base text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Berbagai Disiplin Ilmu
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Kualitas Terjamin
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Tepat Waktu
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Carousel Effect -->
<section class="py-20 bg-[#5c5c5c]">
    <div class="container mx-auto px-6 max-w-5xl">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 text-sm font-semibold text-[#aeaeae] bg-[#383838]/50 backdrop-blur-sm rounded-full animate-slide-up">Testimonial</span>
            <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-white animate-fade-in">Apa Kata Klien Kami</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($testimonials as $testimonial)
            <div class="bg-[#383838]/80 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="aspect-w-1 aspect-h-1 w-full">
                    <img class="w-full h-full object-cover"
                         src="{{ asset('storage/' . $testimonial->image_proof) }}"
                         alt="Testimoni dari {{ $testimonial->customer_name }}"
                         loading="lazy">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-white text-lg">{{ $testimonial->customer_name }}</h3>
                    <p class="text-sm text-[#aeaeae]">{{ $testimonial->customer_origin }}</p>
                    <p class="mt-3 text-sm font-medium text-white bg-[#5c5c5c]/50 backdrop-blur-sm inline-block px-3 py-1 rounded-lg">
                        {{ $testimonial->service_used }}
                    </p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-white py-12">
                <p class="text-lg">Belum ada testimoni yang bisa ditampilkan.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slide-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    .animate-slide-up {
        animation: slide-up 1s ease-out;
    }
</style>

@endsection