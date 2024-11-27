<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   protected $table = 'tests';
   protected $fillable = [
       'name',
       'description',
       'small_description',
       'small_description',
       'value',
       'count',
       'is_active'
   ];
}
