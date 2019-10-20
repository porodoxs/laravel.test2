<?php

use Illuminate\Database\Seeder;

class CatalogBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Catalog::class, 10)->create()->each(function($catalog) {
            $catalog->books()->createMany(factory(App\Book::class, 3)->make()->toArray());
        });
    }
}
