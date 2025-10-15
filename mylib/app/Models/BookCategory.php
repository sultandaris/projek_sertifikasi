<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Category;

class BookCategory extends Model
{
    protected $fillable = ['book_id', 'category_id'];
}
