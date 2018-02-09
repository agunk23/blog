<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            return "email atau password salah";
        }
    }
    function register(Request $request){
        //dd($request);
        $email = $request->email;
        if($email == null){
            return 'email kosong';
        }
        $data = User::where('email', $email)->first();
        if($data != null){
            return 'email sudah ada';
        }




        $user = new User();
        $user->email = $request->input('email');
        $user->name = "aria";
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('login');
    }
}
