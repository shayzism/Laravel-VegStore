<?php

namespace App\Http\Controllers\Seller;


use App\Http\Controllers\Controller;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('front.partials.registerform');
    }

    public function seller_register(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:6',
        ]);
        $seller_data= $request->all();
        $check = $this->create($seller_data);
        return redirect()->route('seller.home');
        // return response()->json($users);

    }

    public function create(array $data)
    {
        return Seller::create([
                'name' => $data['name'],
                'phone_number' => $data['phone_number'],
                'password' => Hash::make($data['password'])
            ]
        );

    }
}
