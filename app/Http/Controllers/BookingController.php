<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
{
    $bookings = Booking::all();
    return view('bookings.index', compact('bookings'));
}
    // Crear una nueva reserva
    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Booking::create([
            'room_id' => $request->room_id,
            'user_id' => auth()->id(), // Asociar la reserva con el usuario autenticado
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('bookings.index')->with('success', '¡Reserva realizada con éxito!');
    }

    // Mostrar formulario para editar una reserva
    public function edit(Booking $booking)
    {
        // Aquí puedes cargar el formulario de edición de reserva
    }

    // Actualizar una reserva
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('bookings.index')->with('success', '¡Reserva actualizada con éxito!');
    }

    // Eliminar una reserva
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', '¡Reserva eliminada con éxito!');
    }
}
