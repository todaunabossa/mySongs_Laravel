<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Favorites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Changa+One&family=Cinzel:wght@400;700&family=Jolly+Lodger&family=Pangolin&family=Permanent+Marker&family=Roboto:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="{{ asset('css/favorites.css') }}">
</head>

<body>
   
        <div class="div-table">
            <table>
                <thead>
                    <tr>
                        <th class="title-header" colspan="6">Canciones que te gustan</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Álbum</th>
                        <th>artista</th>
                        <th>Fecha en la que se añadió</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($collection as $details)
                <tr>
                    <td>{{ $details->id }}</td>
                    <td>{{ $details->title }}</td>
                    <td>{{ $details->album }}</td>
                    <td>{{ $details->artist }}</td>
                    <td>{{ \Carbon\Carbon::parse($details->date)->formatLocalized('%d de %B de %Y') }}</td>
                    <td>{{ $details->duration }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</body>

</html>

