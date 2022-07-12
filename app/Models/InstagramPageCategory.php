<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramPageCategory extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'icon',
        'view',
        'seo_title',
        'seo_description',
        'status',
    ];
}


