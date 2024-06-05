@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Reserva</h1>
        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="start_date">Fecha de Entrada:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $booking->start_date }}" required>
            </div>
            <div class="form-group">
                <label for="end_date">Fecha de Salida:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $booking->end_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
        </form>
    </div>
@endsection
