<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Spotify</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    <div class="home-container">
    <a href="{{ route('Favorites') }}"> 
        <img src="{{ asset('images/welcome.png') }}" alt="Logo Spotify">
    </a>
    </div>
</body>
</html>