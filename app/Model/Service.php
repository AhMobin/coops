<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'section_heading',
        'section_content',
        'status',

    ];
}
