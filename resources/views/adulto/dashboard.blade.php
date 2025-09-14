@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-blue-50 to-blue-100 flex items-center justify-center">
    <div class="w-full max-w-md space-y-6 text-center">
        <h1 class="text-3xl font-bold text-gray-800">👋 Hola, {{ auth()->user()->name }}</h1>
        
        <div class="grid grid-cols-1 gap-4">
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white text-xl py-6 rounded-2xl shadow-lg flex items-center justify-center">
                📅 Recordatorios
            </a>
            <a href="#" class="bg-green-600 hover:bg-green-700 text-white text-xl py-6 rounded-2xl shadow-lg flex items-center justify-center">
                🎙️ Hablar
            </a>
            <a href="#" class="bg-orange-600 hover:bg-orange-700 text-white text-xl py-6 rounded-2xl shadow-lg flex items-center justify-center">
                👨‍👩‍👧 Contactar Familia
            </a>
        </div>
    </div>
</div>
@endsection
