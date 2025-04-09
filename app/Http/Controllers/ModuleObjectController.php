<?php

namespace App\Http\Controllers;

use App\Models\ModuleObject;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModuleObjectController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'module_id' => 'required|exists:modules,id',
            'objects.*.name' => 'required|string|max:255',
            'objects.*.description' => 'nullable|string',
            'objects.*.index_order' => 'required|integer',
            'objects.*.parent_module' => 'nullable|integer|exists:modules,id',
            'objects.*.icon' => 'nullable|string|max:255',
            'objects.*.is_active' => 'nullable|boolean',
            'objects.*.image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        

        foreach ($request->objects as $object) {
            $imagePath = null;
            if (isset($object['image']) && $object['image'] instanceof \Illuminate\Http\UploadedFile) {
                $imagePath = $object['image']->store('module_objects', 'public');
            }
        
            ModuleObject::create([
                'module_id' => $request->module_id,
                'image' => $imagePath,
                'object_name' => $object['name'],
                'object_description' => $object['description'],
                'index_order' => $object['index_order'],
                'parent_module' => $object['parent_module'],
                'icon_css' => $object['icon'],
                'is_active' => $object['is_active'] ?? false,
            ]);
        }
        

        return back()->with('success', 'Object modul berhasil ditambahkan!');
    }

    public function destroy(ModuleObject $moduleObject)
    {
        if ($moduleObject->image) {
            Storage::disk('public')->delete($moduleObject->image);
        }

        $moduleObject->delete();

        return back()->with('success', 'Object modul berhasil dihapus.');
    }
}
