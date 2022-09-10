<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AcademicBook extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'book_name',
        'class_name',
        'owner_name',
        'phone',
        'book_address',
        'description',
        'image',
        'created',
        'status',
    ];


    protected static $cacheKey = '__academic_book_management__';
}
