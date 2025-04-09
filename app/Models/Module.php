<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'index_order',
        'image',
    ];
    public function objects()
    {
        return $this->hasMany(ModuleObject::class);
    }
    
}
