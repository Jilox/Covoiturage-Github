@extends('reservations.layouts')


@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenue sur Covoiturage ESNA !</h1>
        <p class="lead">Votre plateforme fiable pour le covoiturage.</p>
        <hr class="my-4">
        <p>Utilisez notre service pour trouver ou proposer des trajets et voyager facilement entre différentes destinations.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('reservations.index') }}" role="button">Voir les trajets disponibles</a>
    </div>
</div>
@endsection