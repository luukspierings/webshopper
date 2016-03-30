<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainCategory extends Model
{
    protected $table = 'mainCategory';

    protected $fillable = [
        'name'
    ];


   public function cloth()
   {
       return $this->belongsToMany(subCategory::class, 'sub_main', 'mainCategory_id', 'subCategory_id');
   }
}
