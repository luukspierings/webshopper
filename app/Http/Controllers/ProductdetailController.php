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
    
    public function index()
    {
        return view('productdetail/productdetail');
    }

    public function getIndex($id)
    {
        $product = product::find($id);

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