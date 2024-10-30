<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->text('content')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->date('date_publi')->nullable();
            $table->string('slug')->nullable();
            $table->string('tag')->nullable();
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('auteur_id')->nullable();
            $table->foreign('auteur_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('articles');
    }
}
