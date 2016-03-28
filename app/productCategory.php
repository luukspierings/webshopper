<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'productCategories';

    protected $fillable = [
        'name'
    ];

}
