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

        <div class="right-box">
            <a href="{{ route('reservations.index') }}">MENTIONS LÉGALES </a>
            <a href="{{ route('reservations.create') }}">CONTACT</a>


            <!-- Section de contenu -->
            @yield('content')
        </div>

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>

</html>