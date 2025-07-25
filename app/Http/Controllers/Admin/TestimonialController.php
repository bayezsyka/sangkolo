<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        // Kita kirim variabel testimonial kosong agar form tidak error
        $testimonial = new Testimonial();
        return view('admin.testimonials.create', compact('testimonial'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_origin' => 'required|string|max:255',
            'service_used' => 'required|string|max:255',
            'custom_service' => 'nullable|string|max:255|required_if:service_used,custom',
            'image_proof' => 'required|string', // Sekarang menerima path dari FilePond
        ]);

        if ($validated['service_used'] === 'custom') {
            $validated['service_used'] = $validated['custom_service'];
        }

        // Pindahkan file dari folder tmp ke folder testimonials
        $tempFilePath = storage_path('app/public/' . $validated['image_proof']);
        $newFilePath = 'testimonials/' . basename($validated['image_proof']);
        Storage::disk('public')->move($validated['image_proof'], $newFilePath);
        
        $validated['image_proof'] = $newFilePath;
        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil ditambahkan!');
    }

    public function edit(Testimonial $testimonial)
    {
        // Method ini sudah benar, hanya memastikan saja
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_origin' => 'required|string|max:255',
            'service_used' => 'required|string|max:255',
            'custom_service' => 'nullable|string|max:255|required_if:service_used,custom',
            'image_proof' => 'nullable|string', // Boleh kosong saat update
        ]);

        if ($validated['service_used'] === 'custom') {
            $validated['service_used'] = $validated['custom_service'];
        }

        if ($request->filled('image_proof')) {
             // Hapus gambar lama jika ada
            if ($testimonial->image_proof) {
                Storage::disk('public')->delete($testimonial->image_proof);
            }
            // Pindahkan file dari folder tmp ke folder testimonials
            $tempFilePath = storage_path('app/public/' . $validated['image_proof']);
            $newFilePath = 'testimonials/' . basename($validated['image_proof']);
            Storage::disk('public')->move($validated['image_proof'], $newFilePath);
            $validated['image_proof'] = $newFilePath;
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil diperbarui!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image_proof) {
            Storage::disk('public')->delete($testimonial->image_proof);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil dihapus!');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('image_proof_file')) {
        $path = $request->file('image_proof_file')->store('tmp', 'public');
        return $path;
        }
        return response()->json(['error' => 'No file uploaded.'], 400);
    }
    
    // Method baru untuk hapus gambar di halaman edit
    public function destroyImage(Testimonial $testimonial)
    {
        if ($testimonial->image_proof) {
            Storage::disk('public')->delete($testimonial->image_proof);
            $testimonial->image_proof = null;
            $testimonial->save();
        }
        return back()->with('status', 'Gambar berhasil dihapus.');
    }
}