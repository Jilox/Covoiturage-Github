<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use Illuminate\Support\Facades\Auth; // Assurez-vous d'importer la facade Auth si nécessaire


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('reservations.index', [
            'reservations' => Reservation::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.<
     */
    public function create(): View
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request): RedirectResponse
    {
        Reservation::create($request->all());
        return redirect()->route('reservations.index')
            ->withSuccess('New reservation is added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation): View
    {
        return view('reservations.show', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation): View
    {
        return view('reservations.edit', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation): RedirectResponse
    {
        $reservation->update($request->all());
        return redirect()->back()
            ->withSuccess('Reservation is updated successfully.');
    }

    public function home(Reservation $reservation): View
    {
        return view('reservations.home', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation): RedirectResponse
    {
        $reservation->delete();
        return redirect()->route('reservations.index')
            ->withSuccess('Reservation is deleted successfully.');
    }
}
