{{-- resources/views/estudiantes/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Editar Estudiante</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ $estudiante->apellido }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $estudiante->email }}" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $estudiante->fecha_nacimiento }}" required>

        <button type="submit">Actualizar Estudiante</button>
    </form>
@endsection
