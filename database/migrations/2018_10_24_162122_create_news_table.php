<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('category_id')->unsigned()->default(1);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('news_title',255);
            $table->string('news_short_content',255);
            $table->string('news_author',255);
            $table->string('news_preview',255);
            $table->text('news_content');
            $table->string('news_code',100)->nullable();
            $table->integer('news_day')->nullable();
            $table->integer('news_views')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
