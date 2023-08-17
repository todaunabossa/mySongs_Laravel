<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Changa+One&family=Cinzel:wght@400;700&family=Jolly+Lodger&family=Pangolin&family=Permanent+Marker&family=Roboto:wght@100&display=swap');
</style>
</head>
<body>
    <div class="welcome-container">
    
        <img src="{{ asset('images/welcome.png') }}" alt="Logo Spotify">
    </div>
</body>
</html>