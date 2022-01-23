<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'genre',
        'publication',
        'publish_year',
        'writer_id',
        'description',
        'writer_name'
    ];
}
