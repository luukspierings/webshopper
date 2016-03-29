<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function($t){
            $t->increments('id');
            $t->string('name');
            $t->double('price');
            $t->integer('genderCategory_id');
            $t->integer('clothCategory_id');
            $t->text('shortDescription');
            $t->text('longDescription');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
