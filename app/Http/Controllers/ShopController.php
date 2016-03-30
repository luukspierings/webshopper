<?php

namespace App\Http\Controllers;

use App\mainCategory;
use App\subCategory;
use App\product;

class ShopController extends Controller{

    public function index(){
        return view('shop/shop')
            ->with('categories', subCategory::all())
            ->with('products', product::all());
    }


    public function getIndex($id){
        return view('shop/shop')
            ->with('main', mainCategory::find($id))
            ->with('categories',mainCategory::find($id)->sub()->get())
            ->with('products', product::where('mainCategory_id', $id));

    }

    public function getView($id, $category){
        return view('shop/shop')
            ->with('main', mainCategory::find($id))
            ->with('categories',mainCategory::find($id)->sub()->get())
            ->with('products', product::where('mainCategory_id', $id)->where('subCategory_id',$category));
    }
}

?>