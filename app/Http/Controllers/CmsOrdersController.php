<?php

namespace App\Http\Controllers;

use App\order;
use App\productOrder;
use App\product;
use App\user;
use Illuminate\Http\Request;

use App\Http\Requests;

class CmsOrdersController extends Controller
{


    public function index(){

        $orders = order::all();
        $products = product::all();
        $productOrders = productOrder::all();
        $users = user::all();



        return view('cms/listOrder')->with('orders', $orders)->with('products', $products)->with('productOrders', $productOrders)->with('users', $users);
    }



}
