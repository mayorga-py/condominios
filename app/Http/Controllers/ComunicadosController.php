<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComunicadosController extends Controller
{
    public function index()
    {
        if (!Session::has('authenticated')) {
            return redirect()->route('login')->withErrors(['error' => 'Debes iniciar sesión primero.']);
        }

        return view('comunicados'); 
    }
}
