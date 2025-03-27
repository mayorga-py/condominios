<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginAdmin'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $fixedUsername = 'admin'; 
        $fixedPassword = '12345'; 

        if ($credentials['username'] === $fixedUsername && $credentials['password'] === $fixedPassword) {
            return redirect()->route('AdminComunicados'); 
        }

        return back()->withErrors([
            'username' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function logout()
    {
        return redirect()->route('loginAdmin'); 
    }
}