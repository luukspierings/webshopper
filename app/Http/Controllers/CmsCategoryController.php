<?php

namespace App\Http\Controllers;

use App\mainCategory;
use App\subCategory;
use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

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

    public function newMainCategory(){
        return view('cms/newMainCategory');
    }
    public function createMainCategory(CategoryRequest $request){

        $cat = new mainCategory();
        $cat->name = $request->name;

        mainCategory::create([
            'name' => $cat->name,
        ]);

        return redirect('/cms/categorieën');

    }

    public function newSubCategory(){
        return view('cms/newSubCategory');
    }
    public function createSubCategory(CategoryRequest $request){

        $cat = new subCategory();
        $cat->name = $request->name;

        subCategory::create([
            'name' => $cat->name,
        ]);

        return redirect('/cms/categorieën');

    }


    public function editMainCategory(mainCategory $mainCategory)
    {
        return view('cms/editMainCategory')->with('mainCategory', $mainCategory);
    }
    public function updateMainCategory(CategoryRequest $request, mainCategory $mainCategory){

        $mainCategory->name = $request->name;
        $mainCategory->save();

        return redirect('/cms/categorieën');
    }

    public function editSubCategory(subCategory $subCategory)
    {
        return view('cms/editSubCategory')->with('subCategory', $subCategory);
    }
    public function updateSubCategory(CategoryRequest $request, subCategory $subCategory){

        $subCategory->name = $request->name;
        $subCategory->save();

        return redirect('/cms/categorieën');
    }




}
