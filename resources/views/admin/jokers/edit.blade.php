<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Joker: {{ $joker->name }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.jokers.update', $joker->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $joker->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
                            <input type="text" name="nickname" id="nickname" value="{{ old('nickname', $joker->nickname) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $joker->email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                         <div>
                            <label for="major" class="block text-sm font-medium text-gray-700">Jurusan</label>
                            <input type="text" name="major" id="major" value="{{ old('major', $joker->major) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                         <div>
                            <label for="skills" class="block text-sm font-medium text-gray-700">Keahlian</label>
                            <textarea name="skills" id="skills" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('skills', $joker->skills) }}</textarea>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Update Data</button>
                        <a href="{{ route('admin.jokers.index') }}" class="ml-4 text-gray-600">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>