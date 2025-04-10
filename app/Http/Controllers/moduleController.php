<?php
namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::with(['objects.parentModule'])->orderBy('index_order')->get(); // Tidak dipaginasi
        $produk = Module::orderBy('id')->paginate(2); // Ini yang dipaginasi
        return view('operator.module', compact('modules', 'produk'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'index_order' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('modules', 'public');
        }
    
        Module::create([
            'name' => $request->name,
            'description' => $request->description,
            'index_order' => $request->index_order,
            'image' => $imagePath,
        ]);
    
        return redirect()->back()->with('success', 'Modul berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $module = Module::findOrFail($id);
        if ($module->image) {
            Storage::disk('public')->delete($module->image);
        }
        $module->delete();
        return redirect()->back()->with('success', 'Modul berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $module = Module::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'index_order' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($module->image) {
                Storage::disk('public')->delete($module->image);
            }
            $module->image = $request->file('image')->store('modules', 'public');
        }

        $module->update([
            'name' => $request->name,
            'description' => $request->description,
            'index_order' => $request->index_order,
            'image' => $module->image,
        ]);

        return redirect()->back()->with('success', 'Modul berhasil diupdate!');
    }
}
