<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('seller')->attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('seller.home'));
        }
        else if (auth()->attempt(array('phone_number' => $input['phone_number'], 'password' => $input['password']))) {
            if (auth()->check()) {
                return redirect()->route('main');
            }
        }
    }
}
