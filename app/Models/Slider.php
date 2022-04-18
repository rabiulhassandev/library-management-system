<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'title',
        'image',
        'status',
    ];


    protected static $cacheKey = '__slider_management__';
}
