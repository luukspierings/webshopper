<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';

    protected $fillable = [
       'name', 'productCategory_id', 'brandCategory_id', 'mainCategory_id', 'shortDescription', 'longDescription', 'price',
    ];

    public function category(){
        return $this->belongsTo('App\ProductCategory', 'productCategory_id');
    }

    public function brand(){
        return $this->belongsTo('App\brandCategory', 'brandCategory_id');
    }

    public function main(){
        return $this->belongsTo('App\mainCategory', 'mainCategory_id');
    }

}
