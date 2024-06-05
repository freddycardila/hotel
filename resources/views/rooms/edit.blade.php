@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Cuarto</h1>
        <form action="{{ route('rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $room->name }}" required>
            </div>
            <div class="form-group">
                <label for="capacity">Capacidad:</label>
                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $room->capacity }}" required>
            </div>
            <div class="form-group">
                <label for="price_per_night">Precio por Noche:</label>
                <input type="number" step="0.01" class="form-control" id="price_per_night" name="price_per_night" value="{{ $room->price_per_night }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $room->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
