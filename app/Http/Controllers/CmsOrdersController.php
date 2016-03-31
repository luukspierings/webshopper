<?php

namespace App\Http\Controllers;

use App\order;
use App\productOrder;
use App\product;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Requests;

class CmsOrdersController extends Controller
{


    public function index(){

        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $orders = order::all();
        $products = product::all();
        $productOrders = productOrder::all();
        $users = user::all();

        return view('cms/listOrder')->with('orders', $orders)->with('products', $products)->with('productOrders', $productOrders)->with('users', $users);
    }

    public function deleteOrder(order $order){

        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        $productOrders = productOrder::all();
        foreach($productOrders as $po){
            if($po->order_id == $order->id){
                productOrder::destroy($po->id);
            }
        }
        order::destroy($order->id);

        return redirect('/cms/orders');
    }








}
