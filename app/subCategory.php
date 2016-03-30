<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    protected $table = 'subCategory';

    protected $fillable = [
        'name'
    ];

//    public function gender()
//    {
//        return $this->belongsToMany(GenderCategory::class, 'cloth_gender', 'clothCategory_id' , 'genderCategory_id');
//    }

}
