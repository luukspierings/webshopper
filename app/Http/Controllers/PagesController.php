<?php

namespace App\Http\Controllers;

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
}

?>