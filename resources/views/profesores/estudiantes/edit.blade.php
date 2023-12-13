{{-- resources/views/profesores/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Editar Profesor</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profesores.update', $profesor) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $profesor->nombre }}" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ $profesor->apellido }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $profesor->email }}" required>

        <label for="area_especializacion">Área de Especialización:</label>
        <input type="text" name="area_especializacion" id="area_especializacion" value="{{ $profesor->area_especializacion }}" required>

        <button type="submit">Actualizar Profesor</button>
    </form>
@endsection

