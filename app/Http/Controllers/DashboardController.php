<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return match ($user->role) {
            'adulto' => view('adulto.dashboard'),
            'familiar' => view('familiar.dashboard'),
            default => redirect()->route('home')->with('error', 'Rol no válido.'),
        };
    }
    public function familiar()
    {
        return view('familiar.dashboard');
    }


    public function adulto()
    {
        // Traemos al adulto vinculado al usuario autenticado
        $adulto = auth()->user()->adulto; // relación 1 a 1: un usuario adulto con su modelo Adulto

        $rutinas = $adulto ? $adulto->rutinas()->orderBy('fecha_hora', 'asc')->get() : [];

        return view('adulto.dashboard', compact('adulto', 'rutinas'));
    }


}
