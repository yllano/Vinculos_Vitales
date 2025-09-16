@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-slate-50">

    <!-- === Barra Lateral de Navegación === -->
    <aside class="w-64 flex-shrink-0 bg-white shadow-md">
        <div class="p-6 flex items-center space-x-3 border-b border-slate-200">
            <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M16.5 3C19.538 3 22 5.5 22 8.5C22 12.28 19.14 15.35 14.6 19.3L12 21.5L9.4 19.3C4.86 15.35 2 12.28 2 8.5C2 5.5 4.462 3 7.5 3C9.373 3 11.042 3.868 12 5.155C12.958 3.868 14.627 3 16.5 3Z" />
            </svg>
            <span class="text-2xl font-bold text-slate-800">Vínculos Vitales</span>
        </div>
        <nav class="mt-6 p-4 space-y-2">
            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-700 font-semibold bg-blue-100 text-blue-600 rounded-lg">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span>Panel Principal</span>
            </a>
            <!-- 🔔 Nueva opción de Recordatorios -->
            <a href="{{ route('recordatorios.index') }}" 
                class="flex items-center gap-4 px-4 py-3 text-slate-600 font-medium hover:bg-slate-100 rounded-lg transition-colors">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0h18" />
                </svg>
                <span>Recordatorios</span>
            </a>
            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-600 font-medium hover:bg-slate-100 rounded-lg transition-colors">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
                <span>Alertas</span>
            </a>
            <a href="{{ route('adultos.index') }}" 
                class="flex items-center gap-4 px-4 py-3 text-slate-600 font-medium hover:bg-slate-100 rounded-lg transition-colors">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.962A3 3 0 0110.5 9.75v-.75a3 3 0 013-3a3 3 0 013 3v.75m-6 3.75a3 3 0 00-3 3v.75a3 3 0 003 3a3 3 0 003-3v-.75a3 3 0 00-3-3z" />
                </svg>
                <span>Adultos Vinculados</span>
            </a>
        </nav>
    </aside>

    <!-- === Contenido Principal === -->
    <main class="flex-1 p-8">
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-slate-800">Hola de nuevo, {{ auth()->user()->name }}</h1>
            <p class="text-slate-600 mt-1">Aquí tienes un resumen de la actividad reciente de tus seres queridos.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1: Recordatorios -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase">Recordatorios de Hoy</p>
                        <p class="text-4xl font-bold text-blue-600 mt-2">5</p>
                    </div>
                    <div class="p-3 bg-blue-100 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0h18" />
                        </svg>
                    </div>
                </div>
                <p class="text-sm text-slate-500 mt-4">3 para Mamá, 2 para Papá</p>
                <a href="{{ route('recordatorios.index') }}" 
                   class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition">
                   Ver recordatorios
                </a>
            </div>

            <!-- Card 2: Alertas Activas -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase">Alertas Activas</p>
                        <p class="text-4xl font-bold text-amber-600 mt-2">1</p>
                    </div>
                    <div class="p-3 bg-amber-100 rounded-lg">
                        <svg class="w-6 h-6 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                </div>
                <p class="text-sm text-slate-500 mt-4">Medicación de Mamá sin confirmar.</p>
                <a href="#" 
                   class="mt-4 inline-block bg-amber-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-amber-700 transition">
                   Ver alertas
                </a>
            </div>

            <!-- Card 3: Reporte Semanal -->
            <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-500 uppercase">Estado General</p>
                        <p class="text-4xl font-bold text-teal-600 mt-2">Bueno</p>
                    </div>
                    <div class="p-3 bg-teal-100 rounded-lg">
                        <svg class="w-6 h-6 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-sm text-slate-500 mt-4">Todo parece estar en orden esta semana.</p>
                <a href="#" 
                   class="mt-4 inline-block bg-teal-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-teal-700 transition">
                   Ver reporte
                </a>
            </div>
        </div>

    </main>
</div>
@endsection
