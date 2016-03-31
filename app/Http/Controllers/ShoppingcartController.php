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
        $productnum = $_POST['product'];
        $methode = $_POST['method'];

        if($methode == 0) {
            Session::forget('product.' . $productnum);
        }
        if($methode == 1) {
            Session::push('product', $productnum);
        }

        $datanew = array_values(Session::get('product'));
        Session::set('product', $datanew);

        $array = array();
        $count = 0;
        $totalprice = 0;

        if(isset($datanew)){
            foreach ($datanew as $product){
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
