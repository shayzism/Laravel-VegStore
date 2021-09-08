<?php

namespace App\Http\Controllers;
use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return view('front.product.checkout');
    }

    public function store (Request $request)
    {
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->title,
            'price' => $request->price,
            'quantity' =>  $request->quantity,
            'attributes' => array(
                'seller_name'=>$request->seller_name,
                'image'=>$request->image,
            ),
            'associatedModel' => 'Product',
        ));
        return redirect('cart');

    }

    public function delete($id)
    {
        \Cart::remove($id);
        return redirect('cart');
    }
}
