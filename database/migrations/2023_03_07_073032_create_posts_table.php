<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('platform', 15);
            $table->string('title', 25);
            $table->string('description', 50);
            $table->float('price', 6, 2);
            $table->unsignedBigInteger('salesman');
            $table->foreign('salesman')->references('id')->on('users');
            $table->foreignId('game_id')->constrained();
            $table->foreignId('game_category_id')->constrained();
            $table->foreignId('status_id')->constrained();
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
};
