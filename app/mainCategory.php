<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mainCategory extends Model
{
    protected $table = 'mainCategory';

    protected $fillable = [
        'name'
    ];


//    public function cloth()
//    {
//        return $this->belongsToMany(ClothCategory::class, 'cloth_gender', 'genderCategory_id', 'clothCategory_id');
//    }
}
