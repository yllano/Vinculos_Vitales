@extends('layouts.app')

@section('content')
<div class="p-8">
    <h1 class="text-2xl font-bold mb-6">Crear Rutina</h1>

    <form action="{{ route('rutinas.store') }}" method="POST" class="space-y-4">
        @csrf
        
        <div>
            <label class="block text-sm font-medium">Adulto</label>
            <select name="adulto_id" class="w-full border rounded p-2">
                @foreach($adultos as $adulto)
                    <option value="{{ $adulto->id }}">{{ $adulto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium">Título</label>
            <input type="text" name="titulo" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded p-2"></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium">Fecha y Hora</label>
            <input type="datetime-local" name="fecha_hora" class="w-full border rounded p-2" required>
        </div>

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">
            Guardar
        </button>
    </form>
</div>
@endsection
