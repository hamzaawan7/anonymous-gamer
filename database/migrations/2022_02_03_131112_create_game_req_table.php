<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameReqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_req', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('game_id')->unsigned();
            $table->integer('type');
            $table->string('cpu', 255);
            $table->string('ram', 255);
            $table->string('gpu', 255);
            $table->string('dx', 255);
            $table->string('os', 255);
            $table->string('sto', 255);
            $table->string('sound', 255);

            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_req');
    }
}
