{{-- resources/views/estudiantes/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Detalles del Estudiante</h1>

    <div>
        <strong>Nombre:</strong> {{ $estudiante->nombre }}
    </div>
    <div>
        <strong>Apellido:</strong> {{ $estudiante->apellido }}
    </div>
    <div>
        <strong>Email:</strong> {{ $estudiante->email }}
    </div>
    <div>
        <strong>Fecha de Nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}
    </div>

    <a href="{{ route('estudiantes.index') }}">Volver a la lista</a>
@endsection
