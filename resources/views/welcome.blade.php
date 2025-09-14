@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">

    <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
        
        <!-- Imagen -->
        <div>
            <img class="w-full h-72 object-cover" 
                 src="https://img.freepik.com/fotos-premium/abuelo-videollamada-familia-sentada-tableta-digital-hablando-esposa-mayor-hija-adulta-nieto-pequeno-casa-concepto-comunicacion-familiar-distancia-panorama-recortado_568137-618.jpg" 
                 alt="Familia conectada en videollamada">
        </div>
        
        <!-- Texto -->
        <div class="p-10 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Bienvenido a <span class="text-[#2563EB]">Vínculos Vitales</span>
            </h1>

            <p class="text-lg text-gray-600 max-w-xl mx-auto mb-10">
                Mantente cerca de los que más amas con una plataforma amigable, moderna y llena de alegría.
            </p>

            <!-- Botones -->
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                
                <a href="{{ route('login') }}" 
                   class="w-full md:w-1/2 bg-[#2563EB] hover:bg-blue-700 text-white font-semibold text-lg py-4 px-6 rounded-xl shadow-md transition-transform transform hover:scale-105">
                    Iniciar Sesión
                </a>
                
                <a href="{{ route('register') }}" 
                   class="w-full md:w-1/2 bg-[#38BDF8] hover:bg-sky-600 text-white font-semibold text-lg py-4 px-6 rounded-xl shadow-md transition-transform transform hover:scale-105">
                    Crear una cuenta
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
