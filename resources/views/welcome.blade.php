<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Portada con Foto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="portada-container">
        <img src="{{ asset('images/welcome.jpg') }}" alt="welcome">
    </div>
</body>
</html>