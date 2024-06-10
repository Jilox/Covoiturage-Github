@extends('reservations.layouts')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">


<div class="container mt-5">
    <div class="jumbotron text-center bg-light shadow">
        <h1 class="display-4">Bienvenue sur Covoiturage ESNA !</h1>
        <hr class="my-4">
        <p>Utilisez notre service pour trouver ou proposer des trajets et voyager facilement entre différentes destinations.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Enregistrez vous</a>
    </div>
    @endsection