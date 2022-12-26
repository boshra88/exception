<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for_menus', function (Blueprint $table) {
           $table->increments('id');
            $table->unsignedInteger('product_menu_id')->nullable();
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
            $table->foreign('product_menu_id')->references('id')->on('product_menus')->onDelete('cascade');
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
        Schema::dropIfExists('for_menus');
    }
}
