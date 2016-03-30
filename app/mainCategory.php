<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainCategory extends Model
{
    protected $table = 'mainCategory';

    protected $fillable = [
        'name'
    ];


   public function sub()
   {
       return $this->belongsToMany(subCategory::class, 'sub_main', 'mainCategory_id', 'subCategory_id');
   }

    public function product()
    {
        return $this->belongsToMany(product::class, 'product_id');
    }
}
