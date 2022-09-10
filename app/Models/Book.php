<?php

namespace App\Models;

use App\Models\Library;
use App\Models\Category;
use App\Traits\WithCache;
use App\Models\BookWriter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'book_name',
        'book_owner',
        'book_owner_unique_id',
        'book_owner_address',
        'book_description',
        'book_pages',
        'book_price',
        'book_publisher',
        'book_address',
        'book_map',
        'writer_name',
        'book_status',
        'book_pdf',
        'book_image',
        'book_created',


        // foreign keys
        'category_id',
        'writer_id',
        'library_id',
    ];


    protected static $cacheKey = '__books_management__';




    // Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // Book Writer
    public function bookWriter()
    {
        return $this->belongsTo(BookWriter::class, 'writer_id');
    }
    // Library
    public function library()
    {
        return $this->belongsTo(Library::class, 'library_id');
    }
}
