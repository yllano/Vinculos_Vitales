<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Recordatorio;

class AdultoController extends Controller
{
    // Listar adultos del familiar
    public function index()
    {
        $adultos = auth()->user()->adultos; // relación definida en el modelo
        return view('adulto.index', compact('adultos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('adulto.create');
    }

    // Guardar adulto mayor
    public function store(Request $request)
{
    $request->validate([
        'adulto_id' => 'required|exists:users,id',
        'titulo' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'fecha' => 'required|date', // 👈 mismo nombre que en el formulario
    ]);

    Recordatorio::create([
        'familiar_id' => auth()->id(),
        'adulto_id'   => $request->adulto_id,
        'titulo'      => $request->titulo,
        'descripcion' => $request->descripcion,
        'fecha'       => $request->fecha, // 👈 igual al fillable del modelo
    ]);

    return redirect()->route('dashboard.familiar')
        ->with('success', 'Recordatorio creado con éxito.');
}


}

