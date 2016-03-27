<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HerenController extends Controller
{
    public function index()
    {
        return view('heren/heren');
    }
}
