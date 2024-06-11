@extends('reservations.layouts')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif
        <div class="card">
            <h1>Réservation Liste</h1>

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
                                    <a href="{{ route('carte.show', ['lieuDepart' => $reservation->LieuDepart, 'lieuArriver' => $reservation->LieuArriver]) }}" class="btn btn-info btn-sm">
                                        <i class="bi bi-geo-alt"></i> Carte
                                    </a>
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
@endsection