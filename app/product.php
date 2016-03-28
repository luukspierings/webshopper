<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';

    protected $fillable = [
       'name', 'productCategory_id', 'shortDescription', 'longDescription', 'price',
    ];

    public function category(){
        return $this->belongsTo('App\ProductCategory', 'productCategory_id');
    }

}
