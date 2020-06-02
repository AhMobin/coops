<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable = [
        'benefit_heading',
        'benefit_content',
        'status',

    ];
}
