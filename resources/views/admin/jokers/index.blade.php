<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manajemen Joker
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if (session('status'))
                    <div class="mb-4 p-3 rounded-md bg-green-100 text-green-700 border border-green-300">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama & Email</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nickname</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @forelse ($jokers as $joker)
                                <tr class="border-b">
                                    <td class="py-3 px-4">{{ $joker->name }}<br><small>{{ $joker->email }}</small></td>
                                    <td class="py-3 px-4">{{ $joker->nickname ?? '-' }}</td>
                                    <td class="py-3 px-4">
                                        @if ($joker->is_approved)
                                            <span class="bg-green-200 text-green-800 py-1 px-3 rounded-full text-xs">Approved</span>
                                        @else
                                            <span class="bg-yellow-200 text-yellow-800 py-1 px-3 rounded-full text-xs">Pending</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4">
                                        @if (!$joker->is_approved && $joker->nickname)
                                            <form action="{{ route('admin.jokers.approve', $joker->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded text-xs">Approve</button>
                                            </form>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="4" class="text-center py-4">Tidak ada data Joker.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>