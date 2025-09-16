<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use App\Models\User;
use Illuminate\Http\Request;



class RecordatorioController extends Controller
{
    public function index()
{
    $recordatorios = Recordatorio::all();
    return view('recordatorios.index', compact('recordatorios'));
}

    public function create()
    {
    $familiarId = auth()->id();

    // buscar todos los usuarios con rol 'adulto' que tengan como familiar_id el id del usuario logueado
    $adultos = User::where('role', 'adulto')
                   ->where('familiar_id', $familiarId)
                   ->get();

    return view('recordatorios.create', compact('adultos'));
    }

    public function store(Request $request)
{
    $request->validate([
        'adulto_id'   => 'required|exists:users,id',
        'titulo'      => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'fecha_hora'  => 'required|date', // 👈 corregido
    ]);

    Recordatorio::create([
        'familiar_id' => auth()->id(),
        'adulto_id'   => $request->adulto_id,
        'titulo'      => $request->titulo,
        'descripcion' => $request->descripcion,
        'fecha_hora'  => $request->fecha_hora, // 👈 corregido
    ]);

    return redirect()->route('dashboard.familiar')
        ->with('success', 'Recordatorio creado con éxito.');
}

}
