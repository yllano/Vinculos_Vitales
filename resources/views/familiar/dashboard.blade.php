@extends('layouts.app')

@section('content')
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg">
        <div class="p-6 text-2xl font-bold text-blue-600">Vínculos Vitales</div>
        <nav class="mt-6 space-y-4">
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-100 rounded">📅 Rutinas</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-100 rounded">⚠️ Alertas</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-100 rounded">📊 Reportes</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-100 rounded">👨‍👩‍👧 Adultos Vinculados</a>
        </nav>
    </aside>

    <!-- Content -->
    <main class="flex-1 p-8 bg-gray-50">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Panel Familiar</h2>
        <div class="grid grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">📅 Próximos Recordatorios</div>
            <div class="bg-white p-6 rounded-lg shadow">⚠️ Alertas Activas</div>
            <div class="bg-white p-6 rounded-lg shadow">📊 Reporte Semanal</div>
        </div>
    </main>
</div>
@endsection
