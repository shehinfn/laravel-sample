<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table    = 'books';
    protected $guarded  = ['id'];

    public function author()
    {
        $this->hasOne(Author::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_book', 'book_id', 'category_id');
    }
}
