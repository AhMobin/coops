<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'homepage_title',
        'page_heading',
        'story_content',
        'cover_image',
        'status',
    ];
}
