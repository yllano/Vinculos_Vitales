@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-xl p-8 md:p-12">

        <h1 class="text-3xl font-bold text-slate-800 text-center mb-4">
            Restablecer Contraseña
        </h1>
        
        <div class="mb-6 text-sm text-slate-600 text-center">
            ¿Olvidaste tu contraseña? No hay problema. Solo déjanos saber tu dirección de correo electrónico y te enviaremos un enlace para restablecerla.
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="block font-medium text-sm text-slate-700">Correo Electrónico</label>
                <input id="email" class="block mt-1 w-full border-slate-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-8">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    Enviar Enlace
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
