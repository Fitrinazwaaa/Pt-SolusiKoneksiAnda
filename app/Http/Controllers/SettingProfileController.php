<?php

namespace App\Http\Controllers;

use App\Models\SettingProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingProfileController extends Controller
{

    // ================================= PROFILE =================================
    public function profile()
    {
        $setting = SettingProfile::first();
        return view('operator.setting-profile', compact('setting'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'nama_website' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'logo' => 'nullable|image|max:2048',
        ]);
    
        // Ambil data setting yang pertama, kalau tidak ada buat baru
        $setting = SettingProfile::first();
    
        if (!$setting) {
            $setting = new SettingProfile();
        }
    
        // Update data dari input
        $setting->nama_website = $request->nama_website;
        $setting->deskripsi = $request->deskripsi;
    
        // Cek jika ada logo baru diupload
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($setting->logo) {
                Storage::delete('public/' . $setting->logo);
            }
    
            // Simpan logo baru ke storage
            $path = $request->file('logo')->store('logo', 'public');
            $setting->logo = $path;
        }
    
        $setting->save();
    
        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui!');
    }
    


    // ================================= MEDSOS =================================
    public function medsos()
    {
        return view('operator.setting-medsos');
    }
}
