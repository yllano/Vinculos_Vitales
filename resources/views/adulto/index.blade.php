@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6 text-slate-700">Mis Adultos Mayores</h2>

    <a href="{{ route('adultos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        + Agregar Adulto
    </a>

    <ul class="mt-6 space-y-3">
        @forelse($adultos as $adulto)
            <li class="p-4 border rounded-lg">
                <strong>{{ $adulto->name }}</strong> ({{ $adulto->email }})<br>
                <span class="text-sm text-slate-600">Nacimiento: {{ $adulto->fecha_nacimiento ?? 'N/D' }}</span><br>
                <span class="text-sm text-slate-600">Salud: {{ $adulto->condiciones_salud ?? 'N/A' }}</span>
            </li>
        @empty
            <p class="text-slate-500 mt-4">No tienes adultos registrados.</p>
        @endforelse
    </ul>
</div>
@endsection
