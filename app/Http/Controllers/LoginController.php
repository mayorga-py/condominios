<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        $fixedUsername = 'casa18';
        $fixedPassword = '12345';
    
        if ($request->username === $fixedUsername && $request->password === $fixedPassword) {
            Session::put('authenticated', true);
            return redirect()->route('comunicados'); 
        }
    
        return back()->withErrors(['username' => 'Usuario o contraseña incorrectos.']);
    }
    public function logout(Request $request)
    {
        Session::forget('authenticated'); 
        return redirect()->route('login'); 
    }
}
