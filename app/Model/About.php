<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'homepage_title',
        'page_heading',
        'about_content',
        'cover_image',
        'status',
    ];
}
