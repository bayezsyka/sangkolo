<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('admin.dashboard'); // Halaman untuk admin
        }

        if ($user->role === 'joker') {
            if (!$user->is_approved) {
                // Jika belum disetujui, arahkan ke halaman tunggu/isi profil
                return redirect()->route('joker.profile.edit');
            }
            return view('joker.dashboard'); // Halaman untuk joker yang sudah disetujui
        }

        // Default fallback
        return view('dashboard');
    }

    public function editProfile()
    {
        // Hanya joker yang bisa akses halaman ini
        if(Auth::user()->role !== 'joker') {
            return redirect()->route('dashboard');
        }
        return view('joker.profile-form', ['user' => Auth::user()]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'skills' => 'required|string',
        ]);

        $user = Auth::user();
        $user->update([
            'nickname' => $request->nickname,
            'major' => $request->major,
            'skills' => $request->skills,
        ]);

        return redirect()->route('joker.profile.edit')->with('status', 'Profil berhasil diperbarui! Mohon tunggu persetujuan dari Admin.');
    }
}