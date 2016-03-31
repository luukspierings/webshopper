<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productOrder extends Model
{

    protected $table = 'order_products';

    protected $fillable = [
        'order_id','product_id', 'quantity',
    ];


}
