function showMap(lieuDepart, lieuArriver, villes) {
    var depart = villes.find(ville => ville.nom === lieuDepart);
    var arriver = villes.find(ville => ville.nom === lieuArriver);

    var map = L.map('map').setView([48.8566, 2.3522], 6);

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

document.addEventListener('DOMContentLoaded', function() {
    var lieuDepart = document.getElementById('map').getAttribute('data-lieu-depart');
    var lieuArriver = document.getElementById('map').getAttribute('data-lieu-arriver');
    var villes = JSON.parse(document.getElementById('map').getAttribute('data-villes'));
    showMap(lieuDepart, lieuArriver, villes);
});
