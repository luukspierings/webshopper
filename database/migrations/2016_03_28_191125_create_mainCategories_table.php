<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainCategories', function($t){
            $t->increments('id');
            $t->string('name');
            $t->timestamps();
        });

        Schema::create('brand_main', function (Blueprint $table) {
            $table->integer('brandCategory_id')->unsigned();
            $table->integer('mainCategory_id')->unsigned();
        });

        Schema::table('brand_main', function (Blueprint $table) {
            $table->foreign('brandCategory_id')->references('id')->on('brandCategories')->onDelete('cascade');
            $table->foreign('mainCategory_id')->references('id')->on('mainCategories')->onDelete('cascade');
            $table->primary(['brandCategory_id', 'mainCategory_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brand_main');
        Schema::drop('mainCategories');
    }
}
