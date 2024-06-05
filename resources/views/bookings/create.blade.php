@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reservar Habitación</h1>
        <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="form-group">
                <label for="room_id">Selecciona una Habitación:</label>
                <select class="form-control" id="room_id" name="room_id">
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">Fecha de Entrada:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="end_date">Fecha de Salida:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
@endsection
