@extends('reservations.layouts')

@section('content')

<div class="col-md-8">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form action="{{ route('reservations.store') }}" method="post">
                @csrf
                <h1>Créer ma reservation</h1>

                <!-- LieuDepart -->
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

                <!-- Date -->
                <div class="row">
                    <input type="date" class="form-control @error('Date') is-invalid @enderror" id="Date" name="Date" value="{{ old('Date') }}">
                    @if ($errors->has('Date'))
                    <span class="text-danger">{{ $errors->first('Date') }}</span>
                    @endif
                </div>

                <!-- Heure -->
                <div class="row">
                    <input type="time" class="form-control @error('Heure') is-invalid @enderror" id="Heure" name="Heure" value="{{ old('Heure') }}">
                    @if ($errors->has('Heure'))
                    <span class="text-danger">{{ $errors->first('Heure') }}</span>
                    @endif
                </div>

                <!-- Submit -->
                <div class="row">
                    <input type="submit" class="btn btn-primary" value="Reserver">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection