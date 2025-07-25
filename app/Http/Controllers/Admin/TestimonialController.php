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
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_origin' => 'required|string|max:255',
            'service_used' => 'required|string|max:255',
            'content' => 'required|string',
            'image_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_proof')) {
            $path = $request->file('image_proof')->store('testimonials', 'public');
            $validated['image_proof'] = $path;
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil ditambahkan!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_origin' => 'required|string|max:255',
            'service_used' => 'required|string|max:255',
            'content' => 'required|string',
            'image_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_proof')) {
            // Hapus gambar lama jika ada
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