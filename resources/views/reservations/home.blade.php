<!-- resources/views/reservations/home.blade.php -->

@extends('reservations.layouts')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container mt-5">
    <!-- Dynamic Header Image -->
    <div class="jumbotron text-center bg-light shadow">
        <h1 class="display-4">Bienvenue sur Covoiturage ESNA !</h1>
        <hr class="my-4">
        <p>Utilisez notre service pour trouver ou proposer des trajets et voyager facilement entre différentes destinations.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Enregistrez vous</a>
    </div>

    <!-- Search Bar -->
    <div class="search-bar my-5 text-center">
        <h1>Réservation Liste</h1>
        <form action="{{ route('reservations.search') }}" method="get">
            @csrf
            <div class="form-row justify-content-center">
                <div class="col-md-3 mb-3">
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
                <div class="col-md-3 mb-3">
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
                <div class="col-md-2 mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Rechercher</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Offer a Ride Button -->

    <!-- How It Works Section -->
    <div class="how-it-works my-5">
        <h2 class="text-center">Comment ça marche ?</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Recherchez un trajet</h4>
                <p>Utilisez notre moteur de recherche pour trouver le trajet parfait.</p>
            </div>
            <div class="col-md-4">
                <h4>Réservez votre place</h4>
                <p>Choisissez parmi les trajets disponibles et réservez votre place en ligne.</p>
            </div>
            <div class="col-md-4">
                <h4>Voyagez ensemble</h4>
                <p>Rencontrez votre conducteur et les autres passagers et profitez du trajet.</p>
            </div>
        </div>
    </div>
</div>

@endsection