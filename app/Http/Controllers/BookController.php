<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BookResource
     */
    public function index()
    {
        return BookResource::collection(Book::with('catalogs')->get());
    }

    /**
     * Отображение указанного ресурса.
     *
     * @param  \App\Book $book
     *
     * @return BookResource
     */
    public function show(Book $book)
    {
        BookResource::withoutWrapping();
        return new BookResource($book);
    }
}
