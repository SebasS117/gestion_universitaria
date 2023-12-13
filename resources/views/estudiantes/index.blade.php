{{-- resources/views/estudiantes/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}">Crear Nuevo Estudiante</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->apellido }}</td>
                    <td>{{ $estudiante->email }}</td>
                    <td>{{ $estudiante->fecha_nacimiento }}</td>
                    <td>
                        <a href="{{ route('estudiantes.show', $estudiante) }}">Ver</a>
                        <a href="{{ route('estudiantes.edit', $estudiante) }}">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
