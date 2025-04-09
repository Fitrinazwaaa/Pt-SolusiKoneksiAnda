<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingMedsos;

class SettingMedsosController extends Controller
{
    public function index()
    {
        $setting = SettingMedsos::first();
        return view('operator.setting-medsos', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'youtube' => 'nullable|url',
            'instagram' => 'nullable|url',
            'x' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $setting = SettingMedsos::firstOrCreate([]);
        $setting->update($request->only(['facebook', 'youtube', 'instagram', 'x', 'linkedin']));

        return back()->with('success', 'Pengaturan media sosial berhasil diperbarui.');
    }
}
