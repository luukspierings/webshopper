<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $table = 'mainCategories';

    protected $fillable = [
        'name'
    ];


    public function brands()
    {
        return $this->belongsToMany(brandCategory::class, 'brand_main', 'mainCategory_id', 'brandCategory_id');
    }
}
