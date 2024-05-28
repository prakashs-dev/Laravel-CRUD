<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'));
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'fname' => 'required|regex:/^[A-Z]+$/i',
            'lname' => 'required|regex:/^[A-Z]+$/i',
            'username' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'languages' => 'required|array|min:1',
            'password' => 'required'
        ]);

        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['country'] = $request->country;
        $data['state'] = $request->state;
        $data['city'] = $request->city;
        $data['languages'] = $request->languages ;
        $data['password'] = $request->password;
        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'));
        }
        return redirect(route('login'));
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }



}
