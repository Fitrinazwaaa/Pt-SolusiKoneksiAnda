<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingKontak;

class SettingKontakController extends Controller
{
    public function index()
    {
        $kontak = SettingKontak::first();
        return view('operator.setting-kontak', compact('kontak'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'alamat' => 'nullable|string',
            'maps' => 'nullable|string',
        ]);

        $kontak = SettingKontak::firstOrCreate([]);
        $kontak->update($request->only(['email', 'phone', 'alamat', 'maps']));

        return back()->with('success', 'Kontak berhasil diperbarui!');
    }
}
