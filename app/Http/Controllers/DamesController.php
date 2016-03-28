<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;

class DamesController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('dames/dames')->with('products', $products );
    }

    public function showProducts(){
        $products = Product::all();

        return view('dames/dames')->with('products', $products );
    }
}
