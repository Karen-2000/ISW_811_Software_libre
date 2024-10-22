<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <!-- Aquí puede ir tu encabezado o menú de navegación -->
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/posts">Posts</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Aquí se inserta el contenido específico de cada vista -->
    </main>

    <footer>
        <!-- Aquí va el pie de página -->
        <p>Copyright © {{ date('Y') }}</p>
    </footer>
</body>
</html>
