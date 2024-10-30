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
            $table->string('titre')->nullable();
            $table->text('mini_content')->nullable();
            $table->longtext('content')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('tag')->nullable();
            $table->bigInteger('categorie_id')->unsigned()->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
