<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleObject extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'image',
        'object_name',
        'object_description',
        'index_order',
        'parent_module',
        'icon_css',
        'is_active',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function parentModule()
    {
        return $this->belongsTo(Module::class, 'parent_module');
    }
    

}
