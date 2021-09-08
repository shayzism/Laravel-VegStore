<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function show_products ()
    {
        $products=Product::orderBy('created_at','desc')->get();
        return view('front.partials.MainContent',compact($products,'products'));
    }
}
