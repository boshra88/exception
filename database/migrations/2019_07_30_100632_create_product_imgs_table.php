<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_imgs', function (Blueprint $table) {
             $table->increments('id');
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
        Schema::dropIfExists('product_imgs');
    }
}
