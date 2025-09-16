<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vínculos Vitales</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
{{-- Cambiado el fondo a un azul muy claro y el texto a un gris frío (slate) --}}
<body class="bg-sky-100 text-slate-800 antialiased">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 shadow-sm">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <a href="/" class="flex items-center space-x-2">
                {{-- Icono de corazón cambiado a color azul principal --}}
                <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M16.5 3C19.538 3 22 5.5 22 8.5C22 12.28 19.14 15.35 14.6 19.3L12 21.5L9.4 19.3C4.86 15.35 2 12.28 2 8.5C2 5.5 4.462 3 7.5 3C9.373 3 11.042 3.868 12 5.155C12.958 3.868 14.627 3 16.5 3Z" />
                </svg>
                {{-- Texto del logo con el nuevo color slate --}}
                <span class="text-2xl font-bold text-slate-800">Vínculos Vitales</span>
            </a>

            @auth
                <div class="flex items-center space-x-4">
                    {{-- Enlace del panel con colores de la nueva paleta --}}
                    <a href="{{ route('dashboard') }}" class="font-semibold text-slate-600 hover:text-blue-600">Mi Panel</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        {{-- Botón de cerrar sesión cambiado de rosa a azul --}}
                        <button type="submit" class="bg-blue-600 px-4 py-2 rounded-lg text-white font-semibold hover:bg-blue-700 transition-colors">
                            Cerrar sesión
                        </button>
                    </form>
                </div>
            @endauth

        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- Footer cambiado a un fondo de gris frío (slate) --}}
    <footer class="bg-slate-800 text-white mt-16">
        <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            
            <div>
                <h3 class="text-xl font-bold mb-2">Vínculos Vitales</h3>
                {{-- Párrafos del footer con el nuevo color de texto --}}
                <p class="text-slate-400">Conectando corazones, sin importar la distancia.</p>

            </div>
            @if(session('success'))
                <div id="flash-message" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>

                <script>
                    setTimeout(() => {
                        document.getElementById('flash-message').style.display = 'none';
                    }, 4000); // 4 segundos
                </script>
            @endif

            
            <div>
                <h4 class="font-semibold text-lg mb-3">Información</h4>
                <ul class="space-y-2 text-slate-400">
                    {{-- Enlaces del footer con el efecto hover en azul --}}
                    <li><a href="#" class="hover:text-blue-400">Sobre Nosotros</a></li>
                    <li><a href="#" class="hover:text-blue-400">Contacto</a></li>
                    <li><a href="#" class="hover:text-blue-400">Preguntas Frecuentes</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-semibold text-lg mb-3">Legal</h4>
                <ul class="space-y-2 text-slate-400">
                    <li><a href="#" class="hover:text-blue-400">Política de Privacidad</a></li>
                    <li><a href="#" class="hover:text-blue-400">Términos de Uso</a></li>
                </ul>
            </div>

        </div>
        {{-- Sub-footer con un fondo slate más oscuro --}}
        <div class="bg-slate-900 py-4">
            <p class="text-center text-slate-400 text-sm">
                &copy; {{ date('Y') }} Vínculos Vitales. Diseñado con ❤️ por Yesica Llano.
            </p>
        </div>
    </footer>

</body>
</html>