<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Manajemen Testimoni</h2>
            <a href="{{ route('admin.testimonials.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Tambah Testimoni</a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Customer</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Jasa</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($testimonials as $testimonial)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $testimonial->customer_name }} <small>({{ $testimonial->customer_origin }})</small></td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $testimonial->service_used }}</td>
                            <td class="text-left py-3 px-4">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline-block form-delete"">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>