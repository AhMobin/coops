<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VisitorComment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
