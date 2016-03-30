<?php

namespace App\Http\Controllers;

use App\mainCategory;

class ShopController extends Controller{

    public function index(){
        return view('shop/shop');
    }


    public function getIndex($id){
        return view('shop/shop')
            ->with('gender', mainCategory::find($id));
    }

    public function getView($id, $category){
        return view('shop/shop')
            ->with('gender', mainCategory::find($id));
    }
}

?>