@extends('reservations.layouts')
<link rel="stylesheet" href="{{ asset('public/css/show.css') }}">
@stack('styles')
@section('content')

<link rel="stylesheet" href="{{ asset('css/show.css') }}">
<h1>Reservation Information</h1>
<div class="card">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Nom/pseudo:</th>
                <td>{{ $reservation->user ? $reservation->user->name : 'N/A' }}</td>
            </tr>
            <tr>
                <th scope="row">Lieu de départ:</th>
                <td>{{ $reservation->LieuDepart }}</td>
            </tr>
            <tr>
                <th scope="row">Lieu d'arrivée:</th>
                <td>{{ $reservation->LieuArriver }}</td>
            </tr>
            <tr>
                <th scope="row">La date:</th>
                <td>{{ $reservation->Date }}</td>
            </tr>
            <tr>
                <th scope="row">L'heure:</th>
                <td>{{ $reservation->Heure }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection