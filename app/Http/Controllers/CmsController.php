<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Auth;
use App\Http\Requests;

class CmsController extends Controller
{

    private static $imageDirectory      = '/images/';
    private static $imageExtension      = '.png';
    private static $imageSize           = 250;

    public function index(){
        if (Auth::user()->isAdmin == 1){

            $products = product::all();

            return view('pages/cms')->with('products', $products);
        }
        else{
            return redirect('/');
        }
    }

    public function editProduct(Product $product)
    {

        return view('pages/editProduct')->with('product', $product);
    }


    public function updateProduct(ProductRequest $request, Product $product){


        $product->shortDescription = $request->shortDescription;
        $product->price = $request->price;

        $product->save();

        return redirect('/cms');

    }



}
