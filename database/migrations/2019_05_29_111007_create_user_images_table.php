<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',40)->index();
            $table->string('image_user_name',100)->comment('real input name');
            $table->string('image_hash_name',25)->comment('real file name');
            //$table->string('image_temp_name',20)->nullable()->comment('for one-time request');
            $table->boolean('unproved')->default(0);
            $table->boolean('public')->default(0);
            $table->boolean('main')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

            $table->unique(['user_id', 'image_user_name']);
            $table->unique(['user_id', 'image_hash_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_images');
    }
}
