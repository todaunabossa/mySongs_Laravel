<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Portada con Foto</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
    <div class="welcome-container">
        <img src="{{ asset('images/welcome.png') }}" alt="Logo Spotify">
    </div>
</body>
</html>