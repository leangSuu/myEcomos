<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'library_system.book';

    protected $fillable = [
        'title',
        'author',
        'ibsn',
        'category',
        'publish_date',
        'publisher',
        'descriptions',
        'tag',
        'img',
        'pdf',
    ];
}