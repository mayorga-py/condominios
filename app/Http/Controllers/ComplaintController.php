<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    // Mostrar todas las quejas
    public function index()
    {
        $complaints = Complaint::all();
        return view('complaints.index', compact('complaints'));
    }

    // Mostrar el formulario de creación de una queja
    public function create()
    {
        return view('complaints.create');
    }

    // Almacenar una nueva queja
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        Complaint::create($request->only('description'));
        return redirect()->route('complaints.index');
    }

    // Mostrar los detalles de una queja
    public function show($id)
    {
        $complaint = Complaint::findOrFail($id);
        return view('complaints.show', compact('complaint'));
    }
}
