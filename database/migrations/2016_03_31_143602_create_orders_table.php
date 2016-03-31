<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function($t){
            $t->increments('id');
            $t->integer('user_id');
            $t->timestamps();
        });

        Schema::create('order_products', function($t){
            $t->increments('id');
            $t->integer('order_id');
            $t->integer('product_id');
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
        Schema::drop('orders');
        Schema::drop('order_products');
    }
}
