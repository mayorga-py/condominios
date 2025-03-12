<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdeudoController extends Controller
{
    public function index()
    {
        return view('adeudos');
    }
}