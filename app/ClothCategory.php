<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothCategory extends Model
{
    protected $table = 'clothCategory';

    protected $fillable = [
        'name'
    ];

    public function gender()
    {
        return $this->belongsToMany(GenderCategory::class, 'cloth_gender', 'clothCategory_id' , 'genderCategory_id');
    }

}
