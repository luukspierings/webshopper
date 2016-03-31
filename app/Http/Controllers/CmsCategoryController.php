<?php

namespace App\Http\Controllers;

use App\mainCategory;
use App\subCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\CategoryRequest;

class CmsCategoryController extends Controller
{

    public function index(){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $categories = [];
        $main = mainCategory::all();
        $sub = subCategory::all();

        $categories['main'] = $main;
        $categories['sub'] = $sub;


        return view('cms/listCategory')->with('categories', $categories);
    }

    public function newMainCategory(){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        return view('cms/newMainCategory');
    }
    public function createMainCategory(CategoryRequest $request){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $cat = new mainCategory();
        $cat->name = $request->name;

        mainCategory::create([
            'name' => $cat->name,
        ]);

        return redirect('/cms/categorieën');

    }

    public function newSubCategory(){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        return view('cms/newSubCategory');
    }
    public function createSubCategory(CategoryRequest $request){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $cat = new subCategory();
        $cat->name = $request->name;

        subCategory::create([
            'name' => $cat->name,
        ]);

        return redirect('/cms/categorieën');

    }


    public function editMainCategory(mainCategory $mainCategory)
    {
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        return view('cms/editMainCategory')->with('mainCategory', $mainCategory);
    }
    public function updateMainCategory(CategoryRequest $request, mainCategory $mainCategory){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $mainCategory->name = $request->name;
        $mainCategory->save();

        return redirect('/cms/categorieën');
    }

    public function editSubCategory(subCategory $subCategory)
    {
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        return view('cms/editSubCategory')->with('subCategory', $subCategory);
    }
    public function updateSubCategory(CategoryRequest $request, subCategory $subCategory){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $subCategory->name = $request->name;
        $subCategory->save();

        return redirect('/cms/categorieën');
    }

    public function deleteMainCategory(mainCategory $mainCategory){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        mainCategory::destroy($mainCategory->id);

        return redirect('/cms/categorieën');
    }
    public function deleteSubCategory(subCategory $subCategory){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        subCategory::destroy($subCategory->id);

        return redirect('/cms/categorieën');
    }



}
