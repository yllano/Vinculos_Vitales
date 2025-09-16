<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Mostrar la vista de registro.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Manejar el registro de un nuevo familiar.
     */
    public function store(Request $request)
    {
        // ✅ Validación solo para familiares
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // ✅ Crear siempre como familiar
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'familiar', // forzado
        ]);

        // Dispara el evento de registro
        event(new Registered($user));

        // Inicia sesión automáticamente
        Auth::login($user);

        // Redirige al dashboard del familiar
        return redirect()->route('dashboard.familiar');
    }
}
