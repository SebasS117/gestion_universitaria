<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sistema de Gestión Universitaria') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <h1>Sistema de Gestión Universitaria</h1>
    </header>

    <nav class="bg-blue-700 p-4 text-white">
        <!-- Enlaces de navegación -->
    </nav>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-blue-500 text-white text-center p-4">
        © {{ date('Y') }} Sistema de Gestión Universitaria
    </footer>
</body>
</html>


