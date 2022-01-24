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
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title', 255);
            $table->string('images', 2638);
            $table->string('summary', 255);
            $table->text('description');
            $table->date('created_on');
            $table->date('updated_on');

            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
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
