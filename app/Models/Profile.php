<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'position',
        'name',
        'designation',
        'phone',
        'email',
        'facebook',
        'whatsApp',
        'description',
        'address',
        'image',
        'type'
    ];

    protected static $cacheKey = '__profile_management__';

}
