@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-xl p-8 md:p-12">

        <h1 class="text-3xl font-bold text-slate-800 text-center mb-4">
            Confirmar Contraseña
        </h1>

        <div class="mb-6 text-sm text-slate-600 text-center">
            Esta es un área segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Contraseña -->
            <div>
                <label for="password" class="block font-medium text-sm text-slate-700">Contraseña</label>
                <input id="password" class="block mt-1 w-full border-slate-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-8">
                <button type="submit" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    Confirmar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection