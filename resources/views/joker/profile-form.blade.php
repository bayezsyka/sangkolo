<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lengkapi Profil Joker Anda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 bg-white p-8 rounded-lg shadow-md">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            @if (!$user->is_approved)
            <div class="mb-4 p-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
              Akun Anda sedang dalam peninjauan oleh Admin. Anda dapat memperbarui profil Anda selagi menunggu.
            </div>
            @endif

            <form method="POST" action="{{ route('joker.profile.update') }}">
                @csrf
                <div>
                    <x-input-label for="nickname" :value="__('Nickname Publik')" />
                    <x-text-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" :value="old('nickname', $user->nickname)" required autofocus />
                    <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="major" :value="__('Jurusan Kuliah')" />
                    <x-text-input id="major" class="block mt-1 w-full" type="text" name="major" :value="old('major', $user->major)" required />
                     <x-input-error :messages="$errors->get('major')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="skills" :value="__('Keahlian (Contoh: Jago Matematika, Fisika, Menulis Esai)')" />
                    <textarea id="skills" name="skills" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">{{ old('skills', $user->skills) }}</textarea>
                     <x-input-error :messages="$errors->get('skills')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Simpan Profil') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>