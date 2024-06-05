@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Reservas</h1>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Crear Reserva</a>
        @if (count($bookings) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Habitación</th>
                        <th>Fecha de Entrada</th>
                        <th>Fecha de Salida</th>
                        <!-- Agrega más columnas según sea necesario -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->room->name }}</td>
                            <td>{{ $booking->start_date }}</td>
                            <td>{{ $booking->end_date }}</td>
                            <!-- Agrega más columnas según sea necesario -->
                            <td>
                                <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay reservas.</p>
        @endif
    </div>
@endsection