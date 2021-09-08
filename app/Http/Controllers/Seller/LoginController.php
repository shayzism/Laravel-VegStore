<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = 'front.partials.MainContent';
    public function __construct()
    {
        $this->middleware('guest:seller', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('front.partials.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'phone_number'   => 'required',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('seller')->attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('seller.home'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back();
    }
    public function logout()
    {
        Auth::guard('seller')->logout();
        return redirect('/seller');
    }

}
