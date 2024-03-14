@extends('reservations.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Reservation Information
                </div>
                <div class="float-end">
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="LieuDepart" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $reservation->LieuDepart }}
                    </div>
                </div>

                <div class="row">
                    <label for="LieuArriver" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
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
    </div>
</div>

@endsection