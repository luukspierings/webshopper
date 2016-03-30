<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    protected $table = 'subCategory';

    protected $fillable = [
        'name'
    ];

    public function main()
    {
        return $this->belongsToMany(mainCategory::class, 'sub_main', 'subCategory_id' , 'mainCategory_id');
    }

}
