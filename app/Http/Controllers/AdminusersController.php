<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Session;
class AdminusersController extends Controller
{
    public function login()
    {
        return view('adminusers.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
       'username'=>'required',
       'password'=>'required'
       ]);

       $username=$request->input('username');
       $password=$request->input('password');

       if(Auth::attempt(['username'=>$username,'password'=>$password]))
       {
            $user = User::where('username',$username)->first();
            Auth::login($user);
            Session::flash('message', 'Login Successfully!');
            Session::flash('alert-class', 'success');
            return \Redirect::route('dashboard.index', []);

       }
       else {
        Session::flash('message', 'Invalid Credentials!');
        Session::flash('alert-class', 'error');
        return \Redirect::route('adminusers.login', []);
    }

    }

    public function forgot()
    {
        return view('adminusers.forgot');
    }


    public function logout()
    {
        Auth::logout();
        Session::flush();
        return \Redirect::route('adminusers.login', []);
    }
}
