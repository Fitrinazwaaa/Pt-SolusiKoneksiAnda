<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingMedsos extends Model
{
    protected $table = 'setting_medsos';
    protected $fillable = ['facebook', 'youtube', 'instagram', 'x', 'linkedin'];
}
