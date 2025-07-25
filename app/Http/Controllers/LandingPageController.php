<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil 3 testimoni terbaru YANG MEMILIKI GAMBAR BUKTI
        $testimonials = Testimonial::whereNotNull('image_proof')
                                   ->latest()
                                   ->take(3)
                                   ->get();
        
        return view('landing', compact('testimonials'));
    }
}