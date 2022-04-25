<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'name',
        'phone',
        'subject',
        'description',
        'contact_type',
        'address',
        'created',
    ];

    protected static $cacheKey = '__contact_us_management__';

}
