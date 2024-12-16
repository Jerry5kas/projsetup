<?php

namespace App\Models;

use Database\Factories\TestFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;


    protected $table = 'tests';
    protected $fillable = [
        'f_name', 'l_name', 'name', 'age', 'phone', 'mail', 'date', 's_date', 'e_date', 'body_1', 'body_2', 'body_3',
        'city', 'state', 'country', 'opening_amount', 'balance', 'is_active'
    ];

    protected static function newFactory(): TestFactory
    {
        return new TestFactory();
    }
}
