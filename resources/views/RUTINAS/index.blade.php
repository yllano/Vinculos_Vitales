@extends('layouts.app')

@section('content')
<div class="p-8">
    <h1 class="text-2xl font-bold mb-6">Mis Rutinas</h1>

    <a href="{{ route('rutinas.create') }}" 
       class="px-4 py-2 bg-blue-600 text-white rounded-lg">+ Nueva Rutina</a>

    <div class="mt-6 bg-white shadow rounded-lg p-6">
        <table class="w-full text-left">
            <thead>
                <tr>
                    <th class="p-2">Adulto</th>
                    <th class="p-2">Título</th>
                    <th class="p-2">Fecha y Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rutinas as $rutina)
                    <tr class="border-t">
                        <td class="p-2">{{ $rutina->adulto->nombre }}</td>
                        <td class="p-2">{{ $rutina->titulo }}</td>
                        <td class="p-2">{{ $rutina->fecha_hora }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
