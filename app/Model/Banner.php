<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'banner_name',
        'banner_heading',
        'banner_image',
        'status'
    ];
}
