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

    public function editProduct(ProductRequest $request,product $product){

        $product->shortDescription = $request->title;
        $product->price = $request->thumbnail;

        $product->save();

        return redirect('/cms');

    }



}
