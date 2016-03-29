<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brandCategory extends Model
{
    protected $table = 'brandCategories';

    protected $fillable = [
        'name',
    ];

    public function mains()
    {
        return $this->belongsToMany(mainCategory::class, 'brand_main', 'brandCategory_id' , 'mainCategory_id');
    }

}
