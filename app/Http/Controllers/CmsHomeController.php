<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class CmsHomeController extends Controller
{

    public function index(){
        if (Auth::user()->isAdmin != 1){
            return redirect('/');
        }

        return view('cms/cmsHome');
    }




}
