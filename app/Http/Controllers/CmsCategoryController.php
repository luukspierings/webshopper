<?php

namespace App\Http\Controllers;

use App\mainCategory;
use App\subCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class CmsCategoryController extends Controller
{

    public function index(){

        $categories = [];
        $main = mainCategory::all();
        $sub = subCategory::all();

        $categories['main'] = $main;
        $categories['sub'] = $sub;


        return view('cms/listCategory')->with('categories', $categories);
    }




}
