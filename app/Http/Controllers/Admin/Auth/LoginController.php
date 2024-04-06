<?php

namespace App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\user;
use Illuminate\Foundation\Auth\Registersuser;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
//use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating user for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect user after login.
     *
     * @var string
     */

   protected $redirectTo ;


  public function __construct()
   {

    $this->redirectTo =route('user.Dashboard');
      $this->middleware('guest')->except('logout');   // middleware for login
    }

   public function showLoginForm()
     {
         return view('Admin.Auth.login');
    }




     public function customLogin(Request $request)
     {

      $credentials = $request->validate([
    'email' => 'required',
         'password' => 'required',
      ]);

if (Auth::guard('user')->attempt($credentials)) {

     $request->session()->regenerate();

     return redirect()->route('user.Dashboard');


        }

return redirect("/admin/Log_in")->withSuccess('Login details are not valid');

  return redirect()->route('Admin.Login')
   ->with('Success','The provided credentials do not match our records');    // false return to login */


     }


    protected function guard()
    {
        return Auth::guard('user');
    }



}
