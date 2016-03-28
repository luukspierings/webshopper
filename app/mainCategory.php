<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $table = 'mainCategories';

    protected $fillable = [
        'name'
    ];

}
