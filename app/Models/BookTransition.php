<?php

namespace App\Models;

use App\Traits\WithCache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookTransition extends Model
{
    use HasFactory, WithCache;

    protected $fillable = [
        'book_address',
        'book_duration',
        'book_delivery',
        'request_date',
        'return_date',
        'admin_reply_message',
        'admin_delivery_area',
        'request_status',
        'book_id',
        'user_id',
    ];

    protected static $cacheKey = '__book_transition_management__';

    // Book
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    // User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
