@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-sky-50 px-4 py-8 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto">

        <!-- === Sección de Saludo y Fecha === -->
        <header class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-800 mb-2">
                ¡Qué bueno verte, {{ auth()->user()->name }}!
            </h1>
            <p id="current-date" class="text-xl text-slate-600"></p>

            <!-- Botón Cerrar Sesión -->
            <div class="mt-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                        class="inline-flex items-center gap-2 bg-red-500 text-white font-bold text-lg px-6 py-3 rounded-full shadow-lg hover:bg-red-600 transition-transform transform hover:scale-105">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m12-6l6 6-6 6" />
                        </svg>
                        Cerrar sesión
                    </button>
                </form>
            </div>
        </header>

        <!-- === Acciones Principales === -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

           <!-- Card 1: Recordatorios -->
            <a href="{{ route('recordatorios.index') }}" 
            class="group block bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 ease-in-out text-center">
                <div class="flex items-center justify-center h-24 w-24 rounded-full bg-blue-100 mx-auto mb-6 group-hover:bg-blue-200 transition-colors">
                    <svg class="w-12 h-12 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0h18M-4.5 12h22.5" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 mb-2">Mis Recordatorios</h2>
                <p class="text-slate-600">Revisa tus citas y medicamentos para hoy.</p>
            </a>


            <!-- Card 2: Hablar con Asistente -->
            <a href="#" class="group block bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 ease-in-out text-center">
                <div class="flex items-center justify-center h-24 w-24 rounded-full bg-teal-100 mx-auto mb-6 group-hover:bg-teal-200 transition-colors">
                    <svg class="w-12 h-12 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m12 7.5v-1.5m-12 0v-1.5m12 0v-1.5m-12 0v-1.5M12 5.25v1.5m-3 0v-1.5m6 0v-1.5" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 mb-2">Hablar Contigo</h2>
                <p class="text-slate-600">Pide lo que necesites o simplemente conversemos.</p>
            </a>

            <!-- Card 3: Contactar Familia -->
            <a href="#" class="group block bg-white p-8 rounded-3xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 ease-in-out text-center">
                 <div class="flex items-center justify-center h-24 w-24 rounded-full bg-rose-100 mx-auto mb-6 group-hover:bg-rose-200 transition-colors">
                    <svg class="w-12 h-12 text-rose-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-slate-800 mb-2">Mi Familia</h2>
                <p class="text-slate-600">Llama a tus seres queridos con un solo toque.</p>
            </a>

        </div>

        <!-- === Botón de Ayuda === -->
        <div class="mt-16 text-center">
             <a href="#" class="inline-flex items-center gap-3 bg-amber-500 text-white font-bold text-xl px-10 py-5 rounded-full shadow-lg hover:bg-amber-600 transition-transform transform hover:scale-105">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v5.25H12a.75.75 0 000 1.5h.75a.75.75 0 00.75-.75V9z" clip-rule="evenodd" />
                </svg>
                <span>Necesito Ayuda</span>
            </a>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dateElement = document.getElementById('current-date');
        const today = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        dateElement.textContent = today.toLocaleDateString('es-ES', options);
    });
</script>
@endsection
