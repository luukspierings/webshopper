<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\mainCategory;
use App\subCategory;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductdetailController extends Controller
{
    private static $imageDirectory      = '/images/productImages/';
    private static $imageExtension      = '.png';

    public function index()
    {
        return view('productdetail/productdetail');
    }

    public function getIndex($id)
    {
        $product = product::find($id);

        $pathBig = $this::$imageDirectory . $product->id . 'imageBig' . $this::$imageExtension;
        if (file_exists(public_path() . $pathBig)) {
            $product->imagesrcBig = $pathBig;
        } else {
            $product->imagesrcBig = $this::$imageDirectory . 'imagenotavailable.png';
        }


        $mainCats = mainCategory::all();
        $mainCat = null;
        foreach($mainCats as $value){
            if($value->id == $product->mainCategory_id){
                $mainCat = $value;
            }
        }
        $subCats = subCategory::all();
        $subCat = null;
        foreach($subCats as $value){
            if($value->id == $product->subCategory_id){
                $subCat = $value;
            }
        }

        return view('productdetail/productdetail')
            ->with('main', $mainCat)
            ->with('sub', $subCat)
            ->with('product', $product );
    }
    
}