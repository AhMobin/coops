<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dancy extends Model
{
    protected $fillable = [
        'page_heading',
        'dancy_content',
        'status',
        'cover_image'
    ];
}
