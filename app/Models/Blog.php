<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
        'user_id',
        'is_active',
    ];
}
