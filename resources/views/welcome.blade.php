<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel BRIT</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <header>
            <nav>
            </nav>
        </header>

        <div>
            <h1>Welcome to Laravel BRIT</h1>
            @include('php-component', ['php_counter' => $php_counter])
        </div>
    </body>
</html>
