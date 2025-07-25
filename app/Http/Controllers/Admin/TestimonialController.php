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
        // 'content' => 'required|string', // <-- HAPUS BARIS INI
        'image_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        // Logika untuk menangani "Isi Sendiri"
        if ($validated['service_used'] === 'custom') {
            $validated['service_used'] = $validated['custom_service'];
        }

        if ($request->hasFile('image_proof')) {
            $path = $request->file('image_proof')->store('testimonials', 'public');
            $validated['image_proof'] = $path;
        }

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
        // 'content' => 'required|string', // <-- HAPUS BARIS INI
        'image_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

        // Logika untuk menangani "Isi Sendiri"
        if ($validated['service_used'] === 'custom') {
            $validated['service_used'] = $validated['custom_service'];
        }

        if ($request->hasFile('image_proof')) {
            if ($testimonial->image_proof) {
                Storage::disk('public')->delete($testimonial->image_proof);
            }
            $path = $request->file('image_proof')->store('testimonials', 'public');
            $validated['image_proof'] = $path;
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
}