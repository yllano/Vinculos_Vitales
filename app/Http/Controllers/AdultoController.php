<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'fecha_nacimiento' => 'nullable|date',
            'condiciones_salud' => 'nullable|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('12345678'), // contraseña por defecto
            'role' => 'adulto',
            'familiar_id' => auth()->id(),
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'condiciones_salud' => $request->condiciones_salud,
        ]);
        return redirect()->route('dashboard.familiar')->with('success', 'Adulto mayor registrado correctamente.');


    }
}
