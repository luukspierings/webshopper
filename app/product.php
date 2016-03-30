<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{

    protected $table = 'products';

    protected $fillable = [
       'name', 'mainCategory_id', 'subCategory_id', 'shortDescription', 'longDescription', 'price',
    ];

    public function sub(){
        return $this->belongsTo(subCategory::class, 'subCategory_id');
    }

    public function main(){
        return $this->belongsTo(mainCategory::class, 'mainCategory_id');
    }

}
