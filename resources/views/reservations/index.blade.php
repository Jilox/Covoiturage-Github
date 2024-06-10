@extends('reservations.layouts')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif
        <h1>Réservation Liste</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Lieu de départ</th>
                            <th scope="col">Lieu d'arrivée</th>
                            <th scope="col">Date</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($reservations as $reservation)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $reservation->user ? $reservation->user->name : 'N/A' }}</td>
                            <td>{{ $reservation->LieuDepart }}</td>
                            <td>{{ $reservation->LieuArriver }}</td>
                            <td>{{ $reservation->Date }}</td>
                            <td>{{ $reservation->Heure }}</td>
                            <td>
                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this reservation?');"><i class="bi bi-trash"></i> Delete</button>

                                    <!-- Bouton Carte -->
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#mapModal" onclick="showMap('{{ $reservation->LieuDepart }}', '{{ $reservation->LieuArriver }}')">
                                        <i class="bi bi-geo-alt"></i> Carte
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <td colspan="7">
                            <span class="text-danger">
                                <strong>No Reservation Found!</strong>
                            </span>
                        </td>
                        @endforelse
                    </tbody>
                </table>

                {{ $reservations->links() }}

            </div>
        </div>
    </div>
</div>

<!-- Modal pour la carte -->
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapModalLabel">Carte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="map" style="height: 400px; width: 100%;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Script pour afficher la carte -->
<script>
    function showMap(lieuDepart, lieuArriver) {
        var villes = @json($villes); // Vous devez avoir cette variable disponible avec toutes les villes et leurs coordonnées

        var depart = villes.find(ville => ville.nom === lieuDepart);
        var arriver = villes.find(ville => ville.nom === lieuArriver);

        var map = L.map('map').setView([48.8566, 2.3522], 6); // Centrer sur la France

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        if (depart) {
            var departMarker = L.marker([depart.latitude, depart.longitude]).addTo(map)
                .bindPopup(depart.nom);
            map.setView([depart.latitude, depart.longitude], 10);
        }

        if (arriver) {
            var arriverMarker = L.marker([arriver.latitude, arriver.longitude]).addTo(map)
                .bindPopup(arriver.nom);
        }

        if (depart && arriver) {
            var bounds = L.latLngBounds([departMarker.getLatLng(), arriverMarker.getLatLng()]);
            map.fitBounds(bounds);
        }
    }
</script>

@endsection