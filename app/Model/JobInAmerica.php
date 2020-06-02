<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JobInAmerica extends Model
{
    protected $fillable = [
        'page_heading',
        'american_job_content',
        'cover_image',
        'status',
    ];
}
