<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covoiturage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>


    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Covoiturage ESNA</h3>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reservations.index') }}">Réservations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('reservations.create') }}">Créer ma réservation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>