<?php

namespace App\Http\Controllers;

use App\productOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\order;

class PagesController extends Controller{

    public function getIndex(){
        return view('home');
    }

    public function  getAbout(){
        $first = "Don";
        $last = "Juan";

        $fullname = $first . " " . $last;
        $email = "emai@email.com";
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages/about')->withData($data);
    }

    public function PostShoppingcart(){

        $data = Session::get('product');

        if(!empty($data)){
            $o = order::create([
                'user_id' => Auth::user()->id,
            ]);

            foreach ($data as $value) {
                productOrder::create([
                    'order_id' => $o->id,
                    'product_id' => $value,

                ]);
            }
        }




        Session::forget('product');
        return view('home');

    }
}

?>