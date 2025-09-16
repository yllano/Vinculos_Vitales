@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-xl p-8 md:p-12">

        <h1 class="text-3xl font-bold text-slate-800 text-center mb-8">
            Establecer Nueva Contraseña
        </h1>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Correo Electrónico -->
            <div>
                <label for="email" class="block font-medium text-sm text-slate-700">Correo Electrónico</label>
                <input id="email" class="block mt-1 w-full border-slate-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Contraseña -->
            <div class="mt-6">
                <label for="password" class="block font-medium text-sm text-slate-700">Nueva Contraseña</label>
                <input id="password" class="block mt-1 w-full border-slate-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mt-6">
                <label for="password_confirmation" class="block font-medium text-sm text-slate-700">Confirmar Nueva Contraseña</label>
                <input id="password_confirmation" class="block mt-1 w-full border-slate-300 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-8">
                <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    Restablecer Contraseña
                </button>
            </div>
        </form>
    </div>
</div>
@endsection