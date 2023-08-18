<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <div class="welcome-container">
    <a href="{{ route('favorites') }}"> 
        <img src="{{ asset('images/welcome.png') }}" alt="Logo Spotify">
    </a>
    </div>
</body>
</html>