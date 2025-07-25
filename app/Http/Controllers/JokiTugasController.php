<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class JokiTugasController extends Controller
{
    /**
     * Menampilkan halaman publik berisi daftar Joker yang disetujui.
     */
    public function index()
    {
        // Ambil data user yang:
        // 1. Rolenya 'joker'
        // 2. Statusnya 'is_approved' = true
        // 3. Profilnya sudah diisi (nickname tidak kosong)
        $jokers = User::where('role', 'joker')
                      ->where('is_approved', true)
                      ->whereNotNull('nickname')
                      ->latest('updated_at')
                      ->get();

        // Kirim data $jokers ke view 'pages.joki-tugas'
        return view('pages.joki-tugas', compact('jokers'));
    }
}