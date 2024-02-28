<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'books';
    protected $fillable = [
        'Id', 'Author', 'Title', 'PublicationYear'
    ];
}
