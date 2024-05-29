<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $reservations = Reservation::with('user')->latest()->paginate(10);
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
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
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        Reservation::create($data);
        return redirect()->route('reservations.index')
            ->withSuccess('Nouvelle réservation créée avec succès.');
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
            ->withSuccess('La réservation a été mise à jour avec succès.');
    }

    /**
     * Show the home page.
     */
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
            ->withSuccess('La réservation a été supprimée avec succès.');
    }
}
