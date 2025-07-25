<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 tracking-tight">Manajemen Joker</h2>
    </x-slot>
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-xl p-6">
                @if (session('status'))
                    <div class="mb-6 p-4 rounded-lg bg-green-50 text-green-800 border-l-4 border-green-500">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                        <thead class="bg-gray-900 text-white">
                            <tr>
                                <th class="text-left py-4 px-6 font-semibold text-sm uppercase tracking-wider">Nama</th>
                                <th class="text-left py-4 px-6 font-semibold text-sm uppercase tracking-wider">Status</th>
                                <th class="text-left py-4 px-6 font-semibold text-sm uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 divide-y divide-gray-200">
                            @forelse ($jokers as $joker)
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-gray-900">{{ $joker->name }}</span>
                                            <span class="text-sm text-gray-500">{{ $joker->nickname ?? '-' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 space-y-2">
                                        @if ($joker->is_approved)
                                            <span class="inline-block bg-green-100 text-green-700 py-1 px-3 rounded-full text-xs font-medium">Approved</span>
                                        @else
                                            <span class="inline-block bg-yellow-100 text-yellow-700 py-1 px-3 rounded-full text-xs font-medium">Pending</span>
                                        @endif
                                        @if ($joker->is_busy)
                                            <span class="inline-block bg-red-100 text-red-700 py-1 px-3 rounded-full text-xs font-medium">Sibuk</span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-6 flex items-center space-x-3">
                                        @if (!$joker->is_approved)
                                            <form action="{{ route('admin.jokers.approve', $joker->id) }}" method="POST">
                                                @csrf @method('PATCH')
                                                <button class="text-sm bg-blue-600 hover:bg-blue-700 text-white py-1.5 px-4 rounded-lg transition-colors duration-150">Approve</button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.jokers.toggleBusy', $joker->id) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <button class="text-sm {{ $joker->is_busy ? 'bg-green-600 hover:bg-green-700' : 'bg-yellow-600 hover:bg-yellow-700' }} text-white py-1.5 px-4 rounded-lg transition-colors duration-150">
                                                {{ $joker->is_busy ? 'Set Tersedia' : 'Set Sibuk' }}
                                            </button>
                                        </form>
                                        <a href="{{ route('admin.jokers.edit', $joker->id) }}" class="text-sm bg-gray-600 hover:bg-gray-700 text-white py-1.5 px-4 rounded-lg transition-colors duration-150">Edit</a>
                                        <form action="{{ route('admin.jokers.destroy', $joker->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus joker ini secara permanen?');">
                                            @csrf @method('DELETE')
                                            <button class="text-sm bg-red-600 hover:bg-red-700 text-white py-1.5 px-4 rounded-lg transition-colors duration-150">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-6 text-gray-500">Tidak ada data Joker.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>