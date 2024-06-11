@extends('reservations.layouts')

@section('content')

<!-- <div class="row justify-content-center mt-3"> -->
<div class="col-md-8">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif

    <div class="card-body">
        <form action="{{ route('reservations.update', $reservation->id) }}" method="post">
            @csrf
            <h1>Edit Reservations</h1>

            @method("PUT")

            <div class="row">
                <select class="form-control @error('LieuDepart') is-invalid @enderror" id="LieuDepart" name="LieuDepart">
                    <option value="">Sélectionnez le lieu de départ</option>
                    @foreach($villes as $ville)
                    <option value="{{ $ville->nom }}" {{ old('LieuDepart') == $ville->nom ? 'selected' : '' }}>{{ $ville->nom }}</option>
                    @endforeach
                </select>
                @if ($errors->has('LieuDepart'))
                <span class="text-danger">{{ $errors->first('LieuDepart') }}</span>
                @endif
            </div>

            <!-- LieuArriver -->
            <div class="row">
                <select class="form-control @error('LieuArriver') is-invalid @enderror" id="LieuArriver" name="LieuArriver">
                    <option value="">Sélectionnez le lieu d'arrivée</option>
                    @foreach($villes as $ville)
                    <option value="{{ $ville->nom }}" {{ old('LieuArriver') == $ville->nom ? 'selected' : '' }}>{{ $ville->nom }}</option>
                    @endforeach
                </select>
                @if ($errors->has('LieuArriver'))
                <span class="text-danger">{{ $errors->first('LieuArriver') }}</span>
                @endif
            </div>

            <div class="row">
                <input type="date" class="form-control @error('Date') is-invalid @enderror" id="Date" name="Date" value="{{ $reservation->Date }}">
                @if ($errors->has('quantity'))
                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                @endif
            </div>

            <div class="row">
                <input type="time" class="form-control @error('Heure') is-invalid @enderror" id="Heure" name="Heure" value="{{ $reservation->Heure }}">
                @if ($errors->has('Heure'))
                <span class="text-danger">{{ $errors->first('Heure') }}</span>
                @endif
            </div>

            <div class="row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
            </div>

        </form>
    </div>
</div>
<!-- </div> -->

@endsection