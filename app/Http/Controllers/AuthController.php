<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        try {
            return view('pages.login');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function register()
    {
        try {
            return view('pages.register');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function post_login(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->intended('/home');
            }

            return back()->withErrors(['email' => 'Invalid credentials']);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function post_register(Request $request)
    {
        try {
            $this->validate($request, [
                'email' => 'required|email|unique:users',
                'name' => 'required',
                'username' => 'required|unique:users',
                'password' => 'required|min:6',
            ]);

            $user = User::create([
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'username' => $request->input('username'),
                'password' => bcrypt($request->input('password')),
            ]);

            if ($user) {
                return redirect()->intended('/login');
            }

            return back()->withErrors(['email' => 'Registration failed']);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
