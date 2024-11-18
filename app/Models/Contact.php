<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name', 'email', 'phone', 'adrs_1', 'adrs_2', 'city', 'pincode', 'state','active_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'usr_id');
    }
}
