<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users');
            $table->string('seo_title')->nullable();
            $table->string('excerpt');
            $table->string('body');
            $table->string('image_url')->nullable();
            $table->string('slug');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('status')->default('DRAFT');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
