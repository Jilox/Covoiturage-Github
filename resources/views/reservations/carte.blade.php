@extends('reservations.layouts')

@section('content')
<link rel="stylesheet" href="{{ asset('css/carte.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

<div class="modal" tabindex="-1" role="dialog" style="display: block; background: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Carte</h5>
                <a href="{{ route('reservations.index') }}" class="btn-close" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </a>
            </div>
            <div class="modal-body">
                <div id="map" style="height: 400px; width: 100%;" data-lieu-depart="{{ $lieuDepart }}" data-lieu-arriver="{{ $lieuArriver }}" data-villes='@json($villes)'></div>
            </div>
        </div>
    </div>
</div>

<!-- Inclure le fichier JavaScript pour afficher la carte -->
<script src="{{ asset('js/showMap.js') }}"></script>

<!-- Inclure le fichier JavaScript pour rendre la modale déplaçable -->
<script src="{{ asset('js/modal-draggable.js') }}"></script>
@endsection