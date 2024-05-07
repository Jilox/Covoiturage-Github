@extends('reservations.layouts')

@section('content')

<!-- <div class=" justify-content-center mt-3"> -->
<div class="col-md-8">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <div class="card">
        <div class="card-header">
            <!-- <div class="float-start">
                Créer ma reservation
            </div> -->
        </div>
        <div class="card-body">
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf
                <h1>Créer ma reservation</h1>

                <!-- LieuDepart -->
                <div class=" row">
                    <input type="text" class="form-control @error('LieuDepart') is-invalid @enderror" id="LieuDepart" placeholder="LieuDepart" name="LieuDepart" value="{{ old('LieuDepart') }}">
                    @if ($errors->has('LieuDepart'))
                    <span class="text-danger">{{ $errors->first('LieuDepart') }}</span>
                    @endif
                </div>

                <div class=" row">
                    <input type="text" class="form-control @error('LieuArriver') is-invalid @enderror" id="LieuArriver" placeholder="Lieu d'arrivée" name="LieuArriver" value="{{ old('LieuArriver') }}">
                    @if ($errors->has('LieuArriver'))
                    <span class="text-danger">{{ $errors->first('LieuArriver') }}</span>
                    @endif
                </div>

                <div class=" row">
                    <input type="date" class="form-control @error('Date') is-invalid @enderror" id="Date" name="Date" value="{{ ('Date') }}">
                    @if ($errors->has('Date'))
                    <span class="text-danger">{{ $errors->first('Date') }}</span>
                    @endif
                </div>

                <div class=" row">
                    <input type="time" class="form-control @error('Heure') is-invalid @enderror" id="Heure" name="Heure" value="{{ ('Heure') }}">
                    @if ($errors->has('Heure'))
                    <span class="text-danger">{{ $errors->first('Heure') }}</span>
                    @endif
                </div>

                <div class=" row">
                    <input type="submit" class="btn btn-primary" value="Reserver">
                </div>

            </form>
        </div>
    </div>
</div>
<!-- </div> -->

@endsection