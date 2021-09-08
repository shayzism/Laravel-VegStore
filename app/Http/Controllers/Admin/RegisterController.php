<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
//    public function __construct()
//{
//    $this->middleware('guest');
//}
//
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('admin.partials.register');
    }

    public function admin_register(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        $admin_data= $request->all();
        $check = $this->create($admin_data);
        return redirect()->route('admin.home');
        // return response()->json($users);

    }

    public function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]
        );

    }

}
