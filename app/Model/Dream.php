<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
    protected $fillable = [
        'homepage_title',
        'page_heading',
        'dream_content',
        'cover_image',
        'status',
    ];
}
