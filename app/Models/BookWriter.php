<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookWriter extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'writer_name',
        'writer_slug',
        'writer_description'
    ];

    protected static $cacheKey = '__writer_management__';

    // All Books
    public function books()
    {
        return $this->hasMany(BookWriter::class, 'writer_id');
    }
}
