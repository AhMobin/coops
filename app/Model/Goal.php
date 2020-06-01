<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = [
        'homepage_title',
        'page_heading',
        'goal_content',
        'cover_image',
        'status',
    ];
}
