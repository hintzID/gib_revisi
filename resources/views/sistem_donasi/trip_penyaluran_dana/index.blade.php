@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Trip Penyaluran Dana</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('trip-penyaluran-dana.create') }}">Tambah Trip Penyaluran Dana</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <form action="{{ route('trip-penyaluran-dana.index') }}" method="GET" role="search">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan urutan trip">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Urutan Trip</th>
                <th>Trip</th>
                <th>Pondok</th>
                <th>Aksi</th>
            </tr>
            @foreach ($tripPenyaluranDana as $key => $trip)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $trip->urutan_trip }}</td>
                    <td>{{ $trip->daftarTrip->nama_trip }}</td>
                    <td>{{ $trip->pondok->calonMitra->nama_pondok }}</td>
                    <td>
                        <form action="{{ route('trip-penyaluran-dana.destroy', $trip->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('trip-penyaluran-dana.show', $trip->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('trip-penyaluran-dana.edit', $trip->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $tripPenyaluranDana->links() }}
    </div>
@endsection
