<div class="space-y-4">
    <div>
        <label for="customer_name" class="block text-sm font-medium text-gray-700">Nama Customer</label>
        <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $testimonial->customer_name ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <div>
        <label for="customer_origin" class="block text-sm font-medium text-gray-700">Asal (Kota/Instansi)</label>
        <input type="text" name="customer_origin" id="customer_origin" value="{{ old('customer_origin', $testimonial->customer_origin ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <div>
        <label for="service_used" class="block text-sm font-medium text-gray-700">Jasa yang Digunakan</label>
        <input type="text" name="service_used" id="service_used" value="{{ old('service_used', $testimonial->service_used ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>
    <div>
        <label for="content" class="block text-sm font-medium text-gray-700">Isi Testimoni</label>
        <textarea name="content" id="content" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('content', $testimonial->content ?? '') }}</textarea>
    </div>
    <div>
        <label for="image_proof" class="block text-sm font-medium text-gray-700">Bukti Screenshot</label>
        <input type="file" name="image_proof" id="image_proof" class="mt-1 block w-full">
        @isset($testimonial->image_proof)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $testimonial->image_proof) }}" alt="Bukti" class="h-24 w-auto rounded">
            </div>
        @endisset
    </div>
</div>