<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genderCategory', function($t){
            $t->increments('id');
            $t->string('name');
            $t->timestamps();
        });

        Schema::create('cloth_gender', function (Blueprint $table) {
            $table->integer('clothCategory_id')->unsigned();
            $table->integer('genderCategory_id')->unsigned();
        });

        Schema::table('cloth_gender', function (Blueprint $table) {
            $table->foreign('clothCategory_id')->references('id')->on('clothCategory')->onDelete('cascade');
            $table->foreign('genderCategory_id')->references('id')->on('genderCategory')->onDelete('cascade');
            $table->primary(['clothCategory_id', 'genderCategory_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cloth_gender');
        Schema::drop('genderCategory');
    }
}
