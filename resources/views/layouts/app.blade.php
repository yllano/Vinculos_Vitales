<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Vínculos Vitales') }}</title>
    
    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#F1F5F9] antialiased">

    <!-- Header -->
    <header class="bg-[#2563EB] shadow-lg">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-3">
                <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" 
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" 
                        d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 
                        0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 
                        0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 
                        12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-2xl font-bold text-white">
                    {{ config('app.name', 'Vínculos Vitales') }}
                </span>
            </a>
        </nav>
    </header>

    <main class="py-12 md:py-20">
        @yield('content')
    </main>

    <footer class="bg-[#2563EB] mt-16">
        <div class="container mx-auto text-center py-6">
            <p class="text-blue-100">&copy; {{ date('Y') }} Vínculos Vitales. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
