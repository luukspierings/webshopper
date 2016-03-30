<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingcartController extends Controller
{
    public function index()
    {
        $data = Session::get('product');

        dd(Session::all());

        return view('shoppingcart/shoppingcart')
            ->with('list',$data);

    }
}
