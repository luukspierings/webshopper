<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brandCategory extends Model
{
    protected $table = 'brandCategories';

    protected $fillable = [
        'name', 'mainCategory_id'
    ];

    public function mainCategory(){
        return $this->hasMany('App\mainCategory', 'mainCategory_id');
    }

}
