<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
   
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        // Add more fillable attributes as needed
    ];

    protected $hidden = [
        'password',
        'remember_token',
        // Add any other attributes you want to hide
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        // Add any other casts for attributes
    ];
}
