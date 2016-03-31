<?php

namespace App\Http\Controllers;

use App\mainCategory;
use App\subCategory;
use App\product;
use Illuminate\Support\Facades\Input;

class ShopController extends Controller{

    private static $imageDirectory      = '/images/productImages/';
    private static $imageExtension      = '.png';

    public function index(){
        return redirect('/');
    }

    public function getIndex($id){

        $zoeken = Input::has('zoeken') ? Input::get('zoeken') : null;

        if(isset($zoeken)){
            $products = product::where('name', 'Like' , '%'.$zoeken.'%')->where('mainCategory_id', $id)->get();
        }else{
            $products = product::where('mainCategory_id', $id)->get();
        }

        foreach($products as $prod) {
            $pathSmall = $this::$imageDirectory . $prod->id . 'imageSmall' . $this::$imageExtension;
            if (file_exists(public_path() . $pathSmall)) {
                $prod->imagesrcSmall = $pathSmall;
            } else {
                $prod->imagesrcSmall = $this::$imageDirectory . 'imagenotavailable.png';
            }
        }





        return view('shop/shop')
            ->with('main', mainCategory::find($id))
            ->with('sub', 0)
            ->with('categories',subCategory::all())
            ->with('products', $products );

    }

    public function getView($id, $category){


        $zoeken = Input::has('zoeken') ? Input::get('zoeken') : null;

        if(isset($zoeken)){
            $products = product::where('name', 'Like' , '%'.$zoeken.'%')->where('mainCategory_id', $id)->where('subCategory_id',$category)->get();
        }else{
            $products = product::where('mainCategory_id', $id)->where('subCategory_id',$category)->get();
        }

        foreach($products as $prod) {
            $pathSmall = $this::$imageDirectory . $prod->id . 'imageSmall' . $this::$imageExtension;
            if (file_exists(public_path() . $pathSmall)) {
                $prod->imagesrcSmall = $pathSmall;
            } else {
                $prod->imagesrcSmall = $this::$imageDirectory . 'imagenotavailable.png';
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