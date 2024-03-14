@extends('reservations.layouts')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Connexion</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" id="pseudo" required autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Se souvenir de moi
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection