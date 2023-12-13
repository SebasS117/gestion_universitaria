{{-- resources/views/profesores/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Profesor</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="area_especializacion">Área de Especialización:</label>
        <input type="text" name="area_especializacion" id="area_especializacion" required>

        <button type="submit">Crear Profesor</button>
    </form>
@endsection

