<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        return view('productdetail/productdetail')
            ->with('product', product::find($id));
    }
    
}