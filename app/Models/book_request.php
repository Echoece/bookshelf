<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'requested_book',
    ];
}
