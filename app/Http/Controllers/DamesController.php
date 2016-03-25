<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class DamesController extends Controller
{
    public function index()
    {
        return view('dames/dames');
    }
}
