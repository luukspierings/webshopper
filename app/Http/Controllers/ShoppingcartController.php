<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ShoppingcartController extends Controller
{
    public function index()
    {
        return view('shoppingcart/shoppingcart');

    }
}
