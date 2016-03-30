<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainCategory', function($t){
            $t->increments('id');
            $t->string('name');
            $t->timestamps();
        });

        Schema::create('sub_main', function (Blueprint $table) {
            $table->integer('subCategory_id')->unsigned();
            $table->integer('mainCategory_id')->unsigned();
        });

        Schema::table('sub_main', function (Blueprint $table) {
            $table->foreign('subCategory_id')->references('id')->on('subCategory')->onDelete('cascade');
            $table->foreign('mainCategory_id')->references('id')->on('mainCategory')->onDelete('cascade');
            $table->primary(['subCategory_id', 'mainCategory_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_main');
        Schema::drop('mainCategory');
    }
}
