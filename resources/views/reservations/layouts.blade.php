<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggler = document.querySelector('.navbar-toggler');
        const menu = document.querySelector('.right-box');

        toggler.addEventListener('click', function() {
            menu.classList.toggle('show');
        });
    });
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covoiturage</title>
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
</head>

<body>
    <div class="">
        <!-- Utilisation d'une seule ligne pour le titre et la barre de navigation -->
        <div class="navbar">
            <div class="left-box">
                <a href="{{ url('/') }}">
                    <img src="/img/logo2.png" width="215" alt="logo_ESNA">
                </a>
            </div>
            <div class="right-box">
                <a href="{{ url('/') }}">Accueil</a>
                <a href="{{ route('reservations.index') }}">Réservations</a>
                <a href="{{ route('reservations.create') }}">Créer ma réservation</a>
                <a href="{{ route('login') }}">
                    <img src="/img/connexion.png" width="20" alt="Login">

                </a>
            </div>
            <button class="navbar-toggler" type="button">
                <span class="menu-trigger" style="visibility: visible;">
                    <i class="menu-trigger-bar top" style="transform: matrix(0.70711, -0.7071, 0.7071, 0.70711, 0, 0);"></i>
                    <i class="menu-trigger-bar middle" style="transform: matrix(0.70711, -0.7071, 0.7071, 0.70711, 0, 0);"></i>
                    <i class="menu-trigger-bar bottom" style="transform: matrix(0.70711, -0.7071, 0.7071, 0.70711, 0, 0);"></i>
                </span>
            </button>
        </div>

        <!-- Section de contenu -->
        @yield('content')
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>

</html>