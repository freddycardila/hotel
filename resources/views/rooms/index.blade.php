@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Cuartos</h1>
        <!-- Agregar botón para crear nuevo cuarto -->
        <div class="mb-3">
            <a href="{{ route('rooms.create') }}" class="btn btn-primary">Crear Nuevo Cuarto</a>
        </div>

        <!-- Mostrar mensaje de éxito si existe -->
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <!-- Tabla para mostrar la lista de cuartos -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Precio por Noche</th>
                    <th>Descripción</th>
                    <th>Acciones</th> <!-- Nueva columna para acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->capacity }}</td>
                        <td>${{ $room->price_per_night }}</td>
                        <td>{{ $room->description }}</td>
                        <td>
                            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cuarto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
