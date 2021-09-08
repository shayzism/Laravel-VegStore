<?php

namespace App\Http\Controllers\Seller;

use App\Category;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\Controller;
use App\Product;
use App\Seller;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index ()
    {
        $all_product=Product::all()->where('seller_id','=',Auth::user()->id);
        $all_cats=Category::all();
        return view('sellerDashboard.products.index',compact('all_product','all_cats'));
    }
    public function ProductUpload(Request $request)
    {
        $product = new Product();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->image = "";
        $product->seller_name= Auth::guard('seller')->user()->name;
        $product->seller_id=Auth::guard('seller')->id();
        $product->category_name=$request->input('category');
        if($product->save()){
            $image = $request->file('image');
            if($image != null){
                $ext = $image->getClientOriginalExtension();
                $fileName = rand(10000, 50000) . '.' . $ext;
                if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png'){
                    if($image->move(public_path().'/images', $fileName)){
                        $product = Product::find($product->id);
                        $product->image = url('/images') .'/'. $fileName;
                        $product->save();
                    }
                }

            }
            return redirect()->back();
        }

    }

    public function destroy ($id)
    {
        Product::destroy($id);
        return redirect()->back()->with('delete_success',true);
    }
}
