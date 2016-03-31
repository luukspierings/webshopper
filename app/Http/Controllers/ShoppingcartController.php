<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\product;

class ShoppingcartController extends Controller
{
    public function index()
    {
        $data = Session::get('product');

        $array = array();
        $count = 0;
        $totalprice = 0;

        if(isset($data)){
            foreach ($data as $product){
                $pro = product::find($product);
                $array[$count] = $pro;
                $count++;
                $totalprice = $totalprice + $pro->price;
            }
        }


        return view('shoppingcart/shoppingcart')
            ->with('list',$array)
            ->with('totalprice',$totalprice);

    }

    public function PostShoppingcart(){
        $product = $_POST['product'];
        Session::push('product', $product);

        $data = Session::get('product');

        $array = array();
        $count = 0;
        $totalprice = 0;

        if(isset($data)){
            foreach ($data as $product){
                $pro = product::find($product);
                $array[$count] = $pro;
                $count++;
                $totalprice = $totalprice + $pro->price;
            }
        }

        return view('shoppingcart/shoppingcart')
            ->with('list',$array)
            ->with('totalprice',$totalprice);


    }
}
