<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Favorites</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Changa+One&family=Cinzel:wght@400;700&family=Jolly+Lodger&family=Pangolin&family=Permanent+Marker&family=Roboto:wght@100&display=swap');
    </style>
</head>
<body>
    <h1>Favorite Songs List</h1>
    <div class="songs-list">
        <ul>
            @foreach ($songs as $song)
                <li>{{ $song->id }}</li>
                <li>{{ $song->title }}</li>
                <li>{{ $song->album }}</li>
                <li>{{ $song->year }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

