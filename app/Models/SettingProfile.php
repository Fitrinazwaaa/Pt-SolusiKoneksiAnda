<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingProfile extends Model
{
    protected $table = 'setting_profile'; // <- ini penting
    protected $fillable = ['nama_website', 'deskripsi', 'logo'];
}

