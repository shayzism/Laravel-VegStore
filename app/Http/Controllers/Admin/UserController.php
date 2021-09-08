<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show_on_admin_panel(){

        $all_users=User::all();
        return view('admin.users.show',compact($all_users,'all_users'));

    }

    public function create_user_in_admin_panel()
    {
        return view('admin.users.create');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number'=>['required','string'],
            'state'=>['required','string'],
            'city'=>['required','string'],
            'postal_code'=>['required','string','min:10','max:10'],
            'address'=>['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'city' => $data['city'],
            'state' => $data['state'],
            'postal_code' => $data['postal_code'],
            'address' => $data['address'],
            'phone_number'=>$data['phone_number'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function destroy ($id)
    {
        User::destroy($id);
        return redirect()->back()->with('delete_success',true);
    }
}
