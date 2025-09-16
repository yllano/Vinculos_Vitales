@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow">
    <h2 class="text-3xl font-bold mb-6">Mis Recordatorios</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('recordatorios.create') }}" 
       class="inline-block mb-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
       + Nuevo Recordatorio
    </a>

    <ul>
        @forelse ($recordatorios as $rec)
            <li class="border-b py-3">
                <strong>{{ $rec->titulo }}</strong> - 
                <span>{{ \Carbon\Carbon::parse($rec->fecha)->translatedFormat('d M Y H:i') }}</span>
                <p class="text-gray-600">{{ $rec->descripcion }}</p>
            </li>
        @empty
            <li class="text-gray-500">No tienes recordatorios aún.</li>
        @endforelse
    </ul>
</div>
@endsection
