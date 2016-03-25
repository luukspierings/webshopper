<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class CmsController extends Controller
{

    public function index(){
        if (Auth::user()->isAdmin == 1){
            return view('pages/cms');
        }
        else{
            return redirect('/');
        }


    }



}
