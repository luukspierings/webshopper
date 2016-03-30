<?php

namespace App\Http\Controllers;

use App\mainCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class CmsCategoryController extends Controller
{

    public function index(){

        $categories = mainCategory::all();



        return view('cms/listCategory')->with('categories', $categories);
    }




}
