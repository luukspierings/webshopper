<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderCategory extends Model
{
    protected $table = 'genderCategory';

    protected $fillable = [
        'name'
    ];


    public function cloth()
    {
        return $this->belongsToMany(ClothCategory::class, 'cloth_gender', 'genderCategory_id', 'clothCategory_id');
    }
}
