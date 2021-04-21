<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\TagsFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User:factory(100)->create();
        Categories:factory(100)->create();
        Post:factory(100)->create();
        tags:factory(100)->create();
        PostTag:factory(100)->create();
        

    }
}
