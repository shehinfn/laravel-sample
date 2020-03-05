<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table    = 'authors';
    protected $guarded  = ['id'];

    public function book()
    {
        $this->belongsTo(Book::class);
    }

}
