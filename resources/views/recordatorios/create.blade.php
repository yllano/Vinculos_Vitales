@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow">
    <h2 class="text-3xl font-bold mb-6">Nuevo Recordatorio</h2>

    <form action="{{ route('recordatorios.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold">Título</label>
            <input type="text" name="titulo" class="w-full border rounded-lg p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Descripción</label>
            <textarea name="descripcion" class="w-full border rounded-lg p-2"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Fecha</label>
            <input type="datetime-local" name="fecha_hora" class="w-full border rounded-lg p-2" required>
        </div>


        <!-- 👇 Selección de adulto corregida -->
        <div class="mb-4">
            <label class="block font-semibold">Asignar a Adulto</label>
            <select name="adulto_id" class="w-full border rounded-lg p-2" required>
                <option value="">-- Selecciona un adulto --</option>
                @foreach($adultos as $adulto)
                    <option value="{{ $adulto->id }}">
                        {{ $adulto->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Guardar
        </button>
    </form>
</div>
@endsection
