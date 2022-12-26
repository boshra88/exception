<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_img_id')->nullable();
            $table->string('tittle')->nullable();
            $table->string('image')->nullable();
            $table->longText('body')->nullable();
            $table->longText('description')->nullable();
            $table->string('tittle_1')->nullable();
            $table->string('tittle_2')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();           
            $table->longText('body_1')->nullable();
            $table->longText('body_2')->nullable();
            $table->foreign('product_img_id')->references('id')->on('product_imgs')->onDelete('cascade');
            $table->string('remember_token', 100)->nullable();
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
        Schema::dropIfExists('for_images');
    }
}
