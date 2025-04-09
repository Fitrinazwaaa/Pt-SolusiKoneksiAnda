<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingKontak extends Model
{
    protected $table = 'setting_kontak';
    protected $fillable = ['email', 'phone', 'alamat', 'maps'];
}
