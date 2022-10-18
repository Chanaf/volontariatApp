<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('user')->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            // Authentication passed...
            return redirect()->route('accueil');
            
        }
        elseif (Auth::guard('admin')->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            return redirect()->route('home');
        }
        elseif (Auth::guard('organisation')->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            return redirect()->route('organisation');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
