<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;



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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function logout(){
        session()->flush();
        return redirect()->intended('/');
    }



     public function username()
    {
        return 'name';
    }

    public function login(Request $request)
    {
        $name = $request->name;
        $password = $request->password;

       $login = DB::table('users')
               ->where([
                        ['name', '=', $name],
                        ['password','=',$password],
                    ]) 
               ->get();

       
        if(count($login))
        {
            
           foreach ($login as $user) {  
                $User = $user->id;
                $Name = $user->name;
            }
            session()->put('user_id', $User);
            session()->put('user_name', $Name);

            return redirect()->intended('/GrowthStrategy/Q2');
            // return redirect('/GrowthStrategy/Q2');
            // return redirect($request->session()->get('url.intended'));

        }else{
           //  $errors = new MessageBag; // initiate MessageBag
           //   $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
           // return Redirect::back()->withErrors($errors)->withInput(Input::except('password')); 
           // //redirect back to the login page, using ->withErrors($errors) you send the error created above
           //  return back()
           //   ->withInput(Input, 'remember'))
           //  ->withErrors($errors);

            return back()->with("status", "Account and/or password invalid.");

        }
    }

    // public function login(Request $request){
    //     $name=
    // }
}
