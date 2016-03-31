<?php

namespace App\Http\Controllers;

use App\mainCategory;
use App\subCategory;
use App\product;

class ShopController extends Controller{

    private static $imageDirectory      = '/images/productImages/';
    private static $imageExtension      = '.png';

    public function index(){
        return redirect('/');
    }

    public function getIndex($id){

        $products = product::where('mainCategory_id', $id)->get();

        foreach($products as $prod) {
            $path = $this::$imageDirectory . $prod->id . 'image' . $this::$imageExtension;

            if (file_exists(public_path() . $path)) {
                $prod->imagesrc = $path;
            } else {
                $prod->imagesrc = $this::$imageDirectory . 'imagenotavailable.png';
            }
        }

        return view('shop/shop')
            ->with('main', mainCategory::find($id))
            ->with('sub', 0)
            ->with('categories',subCategory::all())
            ->with('products', $products );

    }

    public function getView($id, $category){


        $products = product::where('mainCategory_id', $id)->where('subCategory_id',$category)->get();

        foreach($products as $prod) {
            $path = $this::$imageDirectory . $prod->id . 'image' . $this::$imageExtension;

            if (file_exists(public_path() . $path)) {
                $prod->imagesrc = $path;
            } else {
                $prod->imagesrc = $this::$imageDirectory . 'imagenotavailable.png';
            }
        }


        return view('shop/shop')
            ->with('main', mainCategory::find($id))
            ->with('sub', $category)
            ->with('categories',subCategory::all())
            ->with('products',$products );
    }
}

?>