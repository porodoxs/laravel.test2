<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    public function catalogs()
    {
        return $this->belongsToMany('App\Catalog', 'catalog_book', 'book_id', 'catalog_id');
    }
}
