<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name'];
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_categories', 'category_id', relatedPivotKey: 'book_id');
    }
}
