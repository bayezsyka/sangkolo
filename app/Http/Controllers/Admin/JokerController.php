<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JokerController extends Controller
{
    public function index()
    {
        $jokers = User::where('role', 'joker')
                      ->orderBy('is_approved', 'asc')
                      ->orderBy('created_at', 'desc')
                      ->get();
        return view('admin.jokers.index', compact('jokers'));
    }

    // METHOD BARU: Menampilkan form edit
    public function edit(User $joker)
    {
        return view('admin.jokers.edit', compact('joker'));
    }

    // METHOD BARU: Memproses update data joker
    public function update(Request $request, User $joker)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($joker->id)],
            'major' => 'nullable|string|max:255',
            'skills' => 'nullable|string',
        ]);

        $joker->update($request->all());

        return redirect()->route('admin.jokers.index')->with('status', 'Data Joker berhasil diperbarui!');
    }

    // METHOD BARU: Menghapus joker
    public function destroy(User $joker)
    {
        $joker->delete();
        return redirect()->route('admin.jokers.index')->with('status', 'Akun Joker berhasil dihapus.');
    }

    public function approve(User $user) // Nama parameter diubah agar konsisten
    {
        $user->is_approved = true;
        $user->save();
        return redirect()->route('admin.jokers.index')->with('status', 'Joker berhasil disetujui!');
    }

    // METHOD BARU: Toggle status sibuk
    public function toggleBusy(User $user)
    {
        $user->is_busy = !$user->is_busy; // Membalik nilai (false jadi true, true jadi false)
        $user->save();

        $statusMessage = $user->is_busy ? 'Joker telah ditandai SIBUK.' : 'Joker telah ditandai TERSEDIA.';
        return redirect()->route('admin.jokers.index')->with('status', $statusMessage);
    }
}