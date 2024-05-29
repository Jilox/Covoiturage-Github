@extends('reservations.layouts')
<link rel="stylesheet" href="{{ asset('public/css/show.css') }}">
@stack('styles')
@section('content')

<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<h1>Reservation Information</h1>
<div class="card">
    <div class="card-body">

        <div class="Heure">
            <label for="Heure" class="col-md-4 col-form-label text-md-end text-start"><strong>Nom/pseudo:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $reservation->user ? $reservation->user->name : 'N/A' }}
            </div>
        </div>

        <div class="row">
            <label for="LieuDepart" class="col-md-4 col-form-label text-md-end text-start"><strong>LieuDepart:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $reservation->LieuDepart }}
            </div>
        </div>

        <div class="row">
            <label for="LieuArriver" class="col-md-4 col-form-label text-md-end text-start"><strong>LieuArriver:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $reservation->LieuArriver }}
            </div>
        </div>

        <div class="row">
            <label for="Date" class="col-md-4 col-form-label text-md-end text-start"><strong>La date:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $reservation->Date }}
            </div>
        </div>

        <div class="Heure">
            <label for="Heure" class="col-md-4 col-form-label text-md-end text-start"><strong>L'heure:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $reservation->Heure }}
            </div>
        </div>


    </div>
</div>

@endsection