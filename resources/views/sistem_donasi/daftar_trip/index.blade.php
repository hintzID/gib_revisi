@extends('layouts.app')

@section('content')
    <div class="container border p-3 rounded">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Trip</h2>
                </div>
                <div class="pull-right m-2">
                    <a class="btn btn-success" href="{{ route('daftar_trip.create') }}">Tambah Daftar Trip</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Trip</th>
                <th>Keterangan</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($daftarTrips as $daftarTrip)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $daftarTrip->nama_trip }}</td>
                    <td>{{ $daftarTrip->keterangan }}</td>
                    <td>
                        <form action="{{ route('daftar_trip.destroy', $daftarTrip->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('daftar_trip.edit', $daftarTrip->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
