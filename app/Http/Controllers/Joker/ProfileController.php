<?php

namespace App\Http\Controllers\Joker;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Menampilkan form untuk mengedit profil Joker.
     */
    public function edit(Request $request): View
    {
        return view('joker.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Mengupdate profil Joker.
     */
    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();

        // Validasi gabungan dari profil dasar dan profil joker
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'nickname' => ['required', 'string', 'max:255'],
            'jurusan_kuliah' => ['required', 'string', 'max:255'],
            'keahlian' => ['required', 'string', 'max:1000'],
        ]);

        // Mengisi data yang divalidasi ke model user
        $user->fill($validated);

        // Jika user mengubah emailnya, reset status verifikasi email
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Simpan semua perubahan
        $user->save();

        return Redirect::route('joker.profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
} 