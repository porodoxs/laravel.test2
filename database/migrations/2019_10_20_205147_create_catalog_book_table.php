<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_book', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catalog_id')->unsigned();
            $table->integer('book_id')->unsigned();

            $table->foreign('catalog_id')->references('id')->on('catalogs');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_book');
    }
}
