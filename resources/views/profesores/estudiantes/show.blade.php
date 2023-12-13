{{-- resources/views/profesores/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Detalles del Profesor</h1>

    <div>
        <strong>Nombre:</strong> {{ $profesor->nombre }}
    </div>
    <div>
        <strong>Apellido:</strong> {{ $profesor->apellido }}
    </div>
    <div>
        <strong>Email:</strong> {{ $profesor->email }}
    </div>
    <div>
        <strong>Área de Especialización:</strong> {{ $profesor->area_especializacion }}
    </div>

    <a href="{{ route('profesores.index') }}">Volver a la lista</a>
@endsection
