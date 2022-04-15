<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'name',
        'designation',
        'phone',
        'email',
        'address',
        'image',
        'type'
    ];

    protected static $cacheKey = '__profile_management__';

}
