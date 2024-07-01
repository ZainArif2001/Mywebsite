<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function Register(){
        return view('login_layout.register');
    }

    /// Add Your Registration ///
    public function Registers(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) // Hash the password
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        } else {
            return redirect()->route('register')->withErrors('Register Fail Please Try Again');
        }
    }

    public function Login(){
        return view('login_layout.login');
    }

       /// Login now The page ///
       public function Logins(Request $request)
       {
           $validation = $request->validate([
               'email' => 'required|email',
               'password' => 'required|min:6'
           ]);

           if (Auth::attempt($request->only('email', 'password'))) {
               return redirect()->route('home');
           } else {
               return redirect()->route('login')->withErrors(['email' => 'Invalid credentials.']);
           }
       }

       public function wellcome(){
        return view('welcome');
       }

}
