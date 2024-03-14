@extends('reservations.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Creation de ma Réservation
                </div>
                <div class="float-end">
                    <a href="{{ route('reservations.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('reservations.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="LieuDepart" class="col-md-4 col-form-label text-md-end text-start">Lieu de départ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('LieuDepart') is-invalid @enderror" id="LieuDepart" name="LieuDepart" value="{{ old('LieuDepart') }}">
                            @if ($errors->has('LieuDepart'))
                            <span class="text-danger">{{ $errors->first('LieuDepart') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="LieuArriver" class="col-md-4 col-form-label text-md-end text-start">Lieu d'arrivée</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('LieuArriver') is-invalid @enderror" id="LieuArriver" name="LieuArriver" value="{{ old('LieuArriver') }}">
                            @if ($errors->has('LieuArriver'))
                            <span class="text-danger">{{ $errors->first('LieuArriver') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Date" class="col-md-4 col-form-label text-md-end text-start">La date</label>
                        <div class="col-md-6">
                            <input type="date" class="form-control @error('Date') is-invalid @enderror" id="Date" name="Date" value="{{ ('Date') }}">
                            @if ($errors->has('Date'))
                            <span class="text-danger">{{ $errors->first('Date') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Heure" class="col-md-4 col-form-label text-md-end text-start">l'heure</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control @error('Heure') is-invalid @enderror" id="Heure" name="Heure" value="{{ ('Heure') }}">
                            @if ($errors->has('Heure'))
                            <span class="text-danger">{{ $errors->first('Heure') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Reserver">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection