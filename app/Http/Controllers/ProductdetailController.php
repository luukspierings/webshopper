<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\Session;

class ProductdetailController extends Controller
{
    
    public function index()
    {
        return view('productdetail/productdetail');
    }

    public function getIndex($id)
    {
        return view('productdetail/productdetail')
            ->with('product', product::find($id));
    }

    public function inShoppingcart($id)
    {
        if(Session::has($id)){

        }else{
            Session::put($id,'product');
        }

        return view('shoppingcart/shoppingcart');

    }
}