<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->String('id_post');
            $table->String('id_tag');
            $table->String('Posts_id');
            $table->String('tags_id');



            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id')->reference('id')->on('posts');
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->reference('id')->on('tags');
            
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
        Schema::dropIfExists('post_tags');
    }
}
