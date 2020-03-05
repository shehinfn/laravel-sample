<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    = 'categories';
    protected $guarded  = ['id'];

    function books() {

        return $this->belongsToMany(Book::class, 'category_book', 'category_id', 'book_id');

    }

}
