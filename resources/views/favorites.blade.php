<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Favorites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Changa+One&family=Cinzel:wght@400;700&family=Jolly+Lodger&family=Pangolin&family=Permanent+Marker&family=Roboto:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
   
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="songs-list">
            <table class="table table-dark table-hover table-rounded-top">
                <thead>
                    <tr class="title-row">
                        <th colspan="6" class="text-left">
                            Songs you like
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Album</th>
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

