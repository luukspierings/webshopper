<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\product;

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
}