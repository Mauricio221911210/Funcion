<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('slug');
            $table->String('descripcion');
            $table->String('image');
           
            $table->String('category');
            $table->String('extract');

            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->reference('id')->on('tags');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->reference('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
