<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
           //$table->foreign('article_id')->references('articles')->on('articles.id');

            $table->integer('tag_id')->unsigned();
            //$table->foreign('tag_id')->references('tags')->on('tags.id');
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
        Schema::dropIfExists('articles_tags');
    }
}
