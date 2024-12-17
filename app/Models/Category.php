<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
        'image',
        'is_active',
    ];
    protected static function newFactory(): CategoryFactory
    {
        return new CategoryFactory();
    }

}
