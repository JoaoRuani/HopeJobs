<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if(Auth::chek() ===true)
        {
            return view('admin.blade.php');
        }
        return redirect()->route('login');
    }

    public function LoginForm()
    {
        return view('formLogin.blade.php');
    }

    public function login(Request $request){

        if(!fiLter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['Email Invalido']);
        }

        $credentials=['email'=> $request->email,
                      'passowrd'=> $request->password ];

        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['Dados não Conferem']);
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('admin');
    }
}
