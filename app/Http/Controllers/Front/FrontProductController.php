<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontProductController extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }
}
