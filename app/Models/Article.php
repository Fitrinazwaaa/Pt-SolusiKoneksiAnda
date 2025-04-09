<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_name',
        'title',
        'content',
        'meta_keyword',
        'meta_description',
        'title_image',
        'status',
        'tags',
    ];
}
