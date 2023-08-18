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

<div class="list-container">
    <p>Songs you like</p>
    <div class="songs-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Album</th>
                    <th>Year</th>
                    <th>Added in</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song)
                    <tr>
                        <td>{{ $song->id }}</td>
                        <td>{{ $song->title }}</td>
                        <td>{{ $song->album }}</td>
                        <td>{{ $song->year }}</td>
                        <td>{{ $song->created_at->format('Y-m-d') }}</td>
                        <td>{{ $song->duration }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</body>

</html>

