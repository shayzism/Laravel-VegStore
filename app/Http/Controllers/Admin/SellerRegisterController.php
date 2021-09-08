<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SellerRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show_create_seller_on_admin_panel ()
    {
        return view('admin.seller.create');
    }
    public function create_seller_on_admin_panel(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:6',
        ]);
        $seller_data= $request->all();
        $check = $this->create($seller_data);
        return redirect()->back();
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
