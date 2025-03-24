<?php

namespace App\Http\Controllers;

use App\Models\Queja;
use Illuminate\Http\Request;

class QuejaController extends Controller
{
    // Crear una queja
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        $queja = Queja::create($data);
        return response()->json(['message' => 'Queja registrada con éxito', 'queja' => $queja], 201);
    }

    // Listar todas las quejas
    public function index()
    {
        return response()->json(Queja::all());
    }

    // Actualizar el estado de una queja
    public function update(Request $request, $id)
    {
        $queja = Queja::findOrFail($id);
        $queja->update($request->validate([
            'estado' => 'required|in:pendiente,en revisión,resuelta',
        ]));

        return response()->json(['message' => 'Estado actualizado', 'queja' => $queja]);
    }
}

