@extends('layouts.main')

@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-sangkolo-black sm:text-4xl">Temukan Joker Terbaikmu</h2>
                <p class="mt-6 text-lg leading-8 text-sangkolo-dark">
                    Berikut adalah daftar para Joker yang telah terverifikasi dan siap membantu tugas-tugasmu. Klik tombol konsultasi pada Joker yang Anda minati.
                </p>
            </div>

            {{-- Daftar Kartu Joker --}}
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @forelse ($jokers as $joker)
                    <article class="flex flex-col items-start justify-between p-6 bg-gray-100 rounded-2xl shadow-md border-t-4 border-gray-200">
                        <div class="w-full">
                            <h3 class="mt-1 text-2xl font-semibold leading-6 text-sangkolo-black">
                                {{ $joker->nickname }}
                            </h3>
                            <p class="mt-2 text-sm font-semibold leading-6 text-sangkolo-dark">
                                Mahasiswa/i {{ $joker->major }}
                            </p>
                            <p class="mt-5 text-sm leading-6 text-gray-600">
                                <span class="font-bold">Spesialisasi:</span><br>
                                {{ $joker->skills }}
                            </p>

                            {{-- ====================================================== --}}
                            {{-- == TOMBOL KONSULTASI PER JOKER DIKEMBALIKAN KE SINI == --}}
                            {{-- ====================================================== --}}
                            <div class="relative mt-8 w-full">
                                @php
                                    // GANTI NOMOR INI dengan nomor WhatsApp admin/bisnis Anda
                                    $whatsappNumber = '6285161603362';
                                    
                                    // Pesan WhatsApp dibuat dinamis sesuai NICKNAME JOKER
                                    $message = "Halo kak " . $joker->nickname . ", saya mau konsultasi tugas...";
                                    
                                    $whatsappLink = "https://wa.me/{$whatsappNumber}?text=" . urlencode($message);
                                @endphp
                                <a href="{{ $whatsappLink }}" target="_blank" class="w-full block text-center bg-sangkolo-black text-white font-bold py-3 px-8 rounded-lg text-sm hover:bg-sangkolo-dark transition shadow-lg">
                                    Konsultasi dengan {{ $joker->nickname }}
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-1 lg:col-span-3 text-center py-10">
                        <p class="text-lg text-sangkolo-dark">Belum ada Joker yang tersedia saat ini. Silakan kembali lagi nanti.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection