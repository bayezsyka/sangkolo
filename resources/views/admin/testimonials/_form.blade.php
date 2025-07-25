@php
    // Logika ini sekarang aman, bahkan jika $testimonial belum ada
    $currentService = old('service_used', $testimonial->service_used ?? '');
    $defaultServices = ['Desain Grafis', 'Kaos Custom', 'Joki Tugas'];
    $isCustom = $testimonial && $currentService && !in_array($currentService, $defaultServices);
@endphp

<div x-data="{ selectedService: '{{ $isCustom ? 'custom' : $currentService }}' }" class="space-y-4">
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
        <select name="service_used" id="service_used" x-model="selectedService" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            <option value="" disabled>- Pilih Jasa -</option>
            <option value="Desain Grafis">Desain Grafis</option>
            <option value="Kaos Custom">Kaos Custom</option>
            <option value="Joki Tugas">Joki Tugas</option>
            <option value="custom">Isi Sendiri...</option>
        </select>
    </div>

    <div x-show="selectedService === 'custom'" x-cloak>
        <label for="custom_service" class="block text-sm font-medium text-gray-700">Tulis Jasa yang Digunakan</label>
        <input type="text" name="custom_service" id="custom_service" value="{{ $isCustom ? $currentService : '' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Contoh: Joki Tugas Kalkulus">
    </div>

    <div>
        <label for="image_proof" class="block text-sm font-medium text-gray-700">Bukti Screenshot</label>
        <input type="file" name="image_proof" id="image_proof" class="mt-1 block w-full">
        @if(isset($testimonial) && $testimonial->image_proof)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $testimonial->image_proof) }}" alt="Bukti" class="h-24 w-auto rounded">
            </div>
        @endif
    </div>
</div>