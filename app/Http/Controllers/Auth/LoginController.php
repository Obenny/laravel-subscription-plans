<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Customised where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo ()
    {
        if(Auth::user()->role == 'admin' && Auth::user()->status == 'active')
        {
            // return to admin dashboard;
            $this->redirectTo = route('admin.home');
            return $this->redirectTo;
        }
        else if(Auth::user()->role == 'user' && Auth::user()->status == 'active')
        {
            // return to admin dashboard;
            $this->redirectTo = route('user.home');
            return $this->redirectTo;
        }
        else
        {
            // return to user dashboard;
//            $this->redirectTo = route('home');
//            return $this->redirectTo;
            abort(500, 'You account has been deactivated!');
        }
    }
}
