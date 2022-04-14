<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'category_name',
        'category_slug',
        'category_description'
    ];

    protected static $cacheKey = '__category_management__';

    // All Books
    public function books()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
