{{-- resources/views/estudiantes/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Estudiante</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>

        <button type="submit">Crear Estudiante</button>
    </form>
@endsection
