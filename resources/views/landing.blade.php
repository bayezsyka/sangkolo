@extends('layouts.main')

@section('content')
    <!-- Compact Hero Section -->
    <section class="relative bg-[#383838] text-white">
        <div class="container mx-auto px-6 py-20 sm:py-24 text-center max-w-4xl">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight">
                Solusi Kreatif Profesional<br>Untuk Bisnis Anda
            </h1>
            <p class="mt-4 text-[#aeaeae] text-lg sm:text-xl">
                Layanan desain grafis, kaos custom, dan joki tugas akademik dengan kualitas terbaik.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">
                <a href="#services" class="px-6 py-3 bg-[#5c5c5c] hover:bg-[#909090] text-white font-medium rounded-lg transition-colors duration-300">
                    Jelajahi Layanan
                </a>
                <a href="https://wa.me/6285161603362" class="px-6 py-3 border border-[#5c5c5c] text-white hover:bg-[#5c5c5c]/30 font-medium rounded-lg transition-colors duration-300">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>

<section id="services" class="py-16 bg-[#383838]">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="text-center mb-12">
            <span class="inline-block px-3 py-1 text-sm font-medium text-[#aeaeae] bg-[#5c5c5c] rounded-full">Layanan Kami</span>
            <h2 class="mt-3 text-2xl sm:text-3xl font-bold text-white">Solusi Profesional</h2>
            <p class="mt-2 text-[#aeaeae]">Transformasikan ide Anda menjadi kenyataan dengan layanan unggulan kami.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Service Cards -->
            <div class="bg-[#5c5c5c] p-6 rounded-lg hover:bg-[#6c6c6c] transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-4 bg-[#909090]/10 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white text-center mb-2">Jasa Desain</h3>
                <p class="text-[#aeaeae] text-sm text-center mb-4">
                    Visual branding yang memukau untuk memperkuat identitas bisnis Anda.
                </p>
                <ul class="space-y-2 text-sm text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Logo & Branding
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Desain Digital
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        UI/UX Modern
                    </li>
                </ul>
            </div>

            <div class="bg-[#5c5c5c] p-6 rounded-lg hover:bg-[#6c6c6c] transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-4 bg-[#909090]/10 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white text-center mb-2">Pembuatan Website</h3>
                <p class="text-[#aeaeae] text-sm text-center mb-4">
                    Hadirkan bisnis Anda secara digital dengan website profesional.
                </p>
                <ul class="space-y-2 text-sm text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Responsive Design
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Optimasi SEO
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Maintenance
                    </li>
                </ul>
            </div>

            <div class="bg-[#5c5c5c] p-6 rounded-lg hover:bg-[#6c6c6c] transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-4 bg-[#909090]/10 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white text-center mb-2">Perangkat IoT</h3>
                <p class="text-[#aeaeae] text-sm text-center mb-4">
                    Solusi teknologi cerdas untuk efisiensi bisnis dan rumah Anda.
                </p>
                <ul class="space-y-2 text-sm text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Custom Solution
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Smart Automation
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Integrasi Sistem
                    </li>
                </ul>
            </div>

            <div class="bg-[#5c5c5c] p-6 rounded-lg hover:bg-[#6c6c6c] transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-4 bg-[#909090]/10 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white text-center mb-2">Fotografi & Videografi</h3>
                <p class="text-[#aeaeae] text-sm text-center mb-4">
                    Abadikan momen berharga dengan kualitas profesional.
                </p>
                <ul class="space-y-2 text-sm text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Event Documentation
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Product Shoot
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Video Profil
                    </li>
                </ul>
            </div>

            <div class="bg-[#5c5c5c] p-6 rounded-lg hover:bg-[#6c6c6c] transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-4 bg-[#909090]/10 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white text-center mb-2">Kaos Custom</h3>
                <p class="text-[#aeaeae] text-sm text-center mb-4">
                    Ekspresikan gaya unik Anda dengan desain eksklusif.
                </p>
                <ul class="space-y-2 text-sm text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Desain Eksklusif
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Bahan Premium
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Order Fleksibel
                    </li>
                </ul>
            </div>

            <div class="bg-[#5c5c5c] p-6 rounded-lg hover:bg-[#6c6c6c] transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-4 bg-[#909090]/10 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#aeaeae]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white text-center mb-2">Joki Tugas</h3>
                <p class="text-[#aeaeae] text-sm text-center mb-4">
                    Solusi tepat untuk beban akademik yang menumpuk.
                </p>
                <ul class="space-y-2 text-sm text-[#aeaeae]">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Berbagai Disiplin Ilmu
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Kualitas Terjamin
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-white mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Tepat Waktu
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials with Square Images -->
    <section class="py-16 bg-[#5c5c5c]">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-12">
                <span class="inline-block px-3 py-1 text-sm font-medium text-[#aeaeae] bg-[#383838] rounded-full">Testimonial</span>
                <h2 class="mt-3 text-2xl sm:text-3xl font-bold text-white">Apa Kata Klien Kami</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($testimonials as $testimonial)
                <div class="bg-[#383838] rounded-lg overflow-hidden">
                    <!-- Square Image Container -->
                    <div class="aspect-w-1 aspect-h-1 w-full">
                        <img class="w-full h-full object-cover" 
                             src="{{ asset('storage/' . $testimonial->image_proof) }}" 
                             alt="Testimoni dari {{ $testimonial->customer_name }}"
                             loading="lazy">
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-bold text-white">{{ $testimonial->customer_name }}</h3>
                        <p class="text-sm text-[#aeaeae]">{{ $testimonial->customer_origin }}</p>
                        <p class="mt-2 text-xs font-medium text-white bg-[#5c5c5c] inline-block px-2 py-1 rounded">
                            {{ $testimonial->service_used }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center text-white py-8">
                    <p>Belum ada testimoni yang bisa ditampilkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection