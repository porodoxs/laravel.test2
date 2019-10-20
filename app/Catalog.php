<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public $timestamps = false;

    public function books()
    {
        return $this->belongsToMany('App\Book', 'catalog_book', 'catalog_id', 'book_id');
    }
}
