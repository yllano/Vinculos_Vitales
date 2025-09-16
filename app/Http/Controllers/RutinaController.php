<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function index()
    {
        $rutinas = Rutina::where('familiar_id', auth()->id())->with('adulto')->get();
        return view('rutinas.index', compact('rutinas'));
    }

    public function create()
    {
        $adultos = auth()->user()->adultos; // adultos vinculados al familiar
        return view('rutinas.create', compact('adultos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'adulto_id' => 'required|exists:adultos,id',
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_hora' => 'required|date',
        ]);

        Rutina::create([
            'adulto_id' => $request->adulto_id,
            'familiar_id' => auth()->id(),
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_hora' => $request->fecha_hora,
        ]);

        return redirect()->route('rutinas.index')->with('success', 'Rutina creada con éxito');
    }
}