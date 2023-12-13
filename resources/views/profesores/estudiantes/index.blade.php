{{-- resources/views/profesores/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Lista de Profesores</h1>
    <a href="{{ route('profesores.create') }}">Crear Nuevo Profesor</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Área de Especialización</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->apellido }}</td>
                    <td>{{ $profesor->email }}</td>
                    <td>{{ $profesor->area_especializacion }}</td>
                    <td>
                        <a href="{{ route('profesores.show', $profesor) }}">Ver</a>
                        <a href="{{ route('profesores.edit', $profesor) }}">Editar</a>
                        <form action="{{ route('profesores.destroy', $profesor) }}" method="POST">
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
