<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Muestra la vista de comunicados para el administrador.
     *
     * @return \Illuminate\View\View
     */
    public function showComunicados()
    {
        return view('AdminComunicados');  // Cambia 'admin.comunicados' por la vista que deseas
    }

    /**
     * Muestra la vista de transacciones (pagos realizados).
     *
     * @return \Illuminate\View\View
     */
    public function showPagos()
    {
        return view('AdminPagos');  
    }

    /**
     * Muestra la vista de deudas pendientes (adeudos).
     *
     * @return \Illuminate\View\View
     */
    public function showAdeudos()
    {
        return view('AdminAdeudos');  
    }
}
