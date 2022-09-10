<?php

namespace App\Models;

use App\Models\Book;
use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Library extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'library_name',
        'library_slug',
        'library_phone',
        'library_address',
        'library_map',
        'office_time',
        'library_description',
        'library_image',
    ];

    protected static $cacheKey = '__library_management__';

    // All Books
    public function books()
    {
        return $this->hasMany(Book::class, 'library_id');
    }
}
