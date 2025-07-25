<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class JokerController extends Controller
{
    /**
     * Menampilkan halaman daftar Joker.
     */
    public function index()
    {
        // Ambil semua user dengan role 'joker'
        // Urutkan berdasarkan yang belum disetujui (pending) terlebih dahulu
        $jokers = User::where('role', 'joker')
                      ->orderBy('is_approved', 'asc') // false (0) akan muncul di atas
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('admin.jokers.index', compact('jokers'));
    }

    /**
     * Mengubah status 'is_approved' menjadi true.
     */
    public function approve(User $user)
    {
        // Pastikan yang di-approve adalah seorang joker
        if ($user->role === 'joker') {
            $user->is_approved = true;
            $user->save();
            return redirect()->route('admin.jokers.index')->with('status', 'Joker berhasil disetujui!');
        }
        return redirect()->route('admin.jokers.index')->with('error', 'Gagal, user bukan Joker.');
    }
}