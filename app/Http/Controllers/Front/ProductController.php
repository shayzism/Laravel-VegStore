<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show_on_product_page ()
    {
        $all_products=Product::orderBy('created_at','desc')->get();
        $categories=Category::all();
        return view('front.product.shop',compact($all_products,'all_products',$categories,'categories'));
        return view('front.partials.MainContent',compact($products,'products'));
    }
    public function show_on_single_product_page ($id){

        $product=Product::find($id);
        $products=Product::orderBy('category_name','desc')->get();
        return view('front.product.single',compact($product,'product',$products,'products'));

    }
    public function simillar_product ()
    {
        //be tabe bala enteqal yaft!
        //hazf nakardam chon toye payan name nveshte boodm

    }

}
