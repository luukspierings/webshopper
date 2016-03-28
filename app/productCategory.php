<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'productCategories';

    protected $fillable = [
        'name', 'mainCategory_id'
    ];

    public function mainCategory(){
        return $this->hasMany('App\mainCategory', 'mainCategory_id');
    }
}
