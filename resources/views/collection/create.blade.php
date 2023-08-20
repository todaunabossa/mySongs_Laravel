<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>New Record</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <div class="contact-form">
    
    @extends('layouts.app') 

@section('content')
    <div class="container-record">
        <h2>Agregar Nuevo Registro</h2>
        
        <form action="{{ route('Form') }}" method="POST">
            @csrf <!-- Token de seguridad -->

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="3" required></textarea>
            <br>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection

    </div>
</body>
</html>