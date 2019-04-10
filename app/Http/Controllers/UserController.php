<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function signUp()
    {
        return view('auth.register');
    }
    public function postSignUp(Request $request)
    {

        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new \App\User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function showLogin()
    { }
}
