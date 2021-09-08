<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show_create_user_in_admin_panel()
    {
        return view('admin.users.create');
    }

    public function create_user_in_admin_panel (Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number'=>['required','string'],
            'state'=>['required','string'],
            'city'=>['required','string'],
            'postal_code'=>['required','string','min:10','max:10'],
            'address'=>['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user_data= $request->all();
        $check = $this->create($user_data);
        return redirect()->back();
        // return response()->json($users);
    }
    public function create(array $data)
    {
        return User::create([
                'name' => $data['name'],
                'city' => $data['city'],
                'state' => $data['state'],
                'postal_code' => $data['postal_code'],
                'address' => $data['address'],
                'phone_number'=>$data['phone_number'],
                'password' => Hash::make($data['password']),
            ]
        );

    }
}
