@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6 text-slate-700">Registrar Adulto Mayor</h2>

    <form action="{{ route('adultos.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-600">Nombre</label>
            <input type="text" name="name" class="w-full mt-2 p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-600">Correo</label>
            <input type="email" name="email" class="w-full mt-2 p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-600">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="w-full mt-2 p-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-slate-600">Condiciones de salud</label>
            <textarea name="condiciones_salud" class="w-full mt-2 p-2 border rounded-lg"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            Registrar
        </button>
    </form>
</div>
@endsection
