<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Profil Joker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">

                    <form method="post" action="{{ route('joker.profile.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <h3 class="text-lg font-medium">Informasi Akun</h3>
                        <p class="mt-1 mb-4 text-sm text-gray-600 dark:text-gray-400">
                            Informasi dasar untuk akun Anda.
                        </p>

                        <div>
                            <x-input-label for="name" :value="__('Nama Lengkap')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                             @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                        {{ __('Alamat email Anda belum terverifikasi.') }}
                                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                            {{ __('Klik di sini untuk mengirim ulang email verifikasi.') }}
                                        </button>
                                    </p>
                                </div>
                            @endif
                        </div>

                        <hr class="my-6 border-gray-200 dark:border-gray-700">

                        <h3 class="text-lg font-medium">Informasi Profil Joker</h3>
                        <p class="mt-1 mb-4 text-sm text-gray-600 dark:text-gray-400">
                            Profil ini akan ditampilkan kepada klien.
                        </p>

                        <div>
                            <x-input-label for="nickname" :value="__('Nickname / Nama Panggilan')" />
                            <x-text-input id="nickname" name="nickname" type="text" class="mt-1 block w-full" :value="old('nickname', $user->nickname)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nickname')" />
                        </div>

                        <div>
                            <x-input-label for="jurusan_kuliah" :value="__('Jurusan Kuliah')" />
                            <x-text-input id="jurusan_kuliah" name="jurusan_kuliah" type="text" class="mt-1 block w-full" :value="old('jurusan_kuliah', $user->jurusan_kuliah)" required />
                            <x-input-error class="mt-2" :messages="$errors->get('jurusan_kuliah')" />
                        </div>

                        <div>
                            <x-input-label for="keahlian" :value="__('Keahlian (Pisahkan dengan koma)')" />
                            <textarea id="keahlian" name="keahlian" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" rows="4">{{ old('keahlian', $user->keahlian) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('keahlian')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Simpan Semua Perubahan') }}</x-primary-button>
                            @if (session('success'))
                                <p class="text-sm text-green-600 dark:text-green-400">{{ session('success') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>