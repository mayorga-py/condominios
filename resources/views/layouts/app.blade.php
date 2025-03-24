
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Quejas</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <!-- Barra de navegación -->
        <nav>
            <ul>
                <li><a href="{{ route('complaints.index') }}">Quejas</a></li>
                <li><a href="{{ route('complaints.create') }}">Crear Queja</a></li>
            </ul>
        </nav>

        @yield('content')
    </div>
</body>
</html>
