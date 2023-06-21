@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Trip Penyaluran Dana</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('trip-penyaluran-dana.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Terdapat kesalahan dalam inputan:<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('trip-penyaluran-dana.update', $tripPenyaluranDana->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="urutan_trip">Urutan Trip:</label>
                <input type="number" class="form-control" name="urutan_trip" value="{{ $tripPenyaluranDana->urutan_trip }}" required>
            </div>

            <div class="form-group">
                <label for="trip_id">Trip:</label>
                <select class="form-control" name="trip_id" required>
                    @foreach ($daftarTrip as $trip)
                        <option value="{{ $trip->id }}" {{ $tripPenyaluranDana->trip_id == $trip->id ? 'selected' : '' }}>{{ $trip->nama_trip }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="pondok_id">Pondok:</label>
                <select class="form-control" name="pondok_id" required>
                    @foreach ($pondok as $pondokItem)
                        <option value="{{ $pondokItem->id }}" {{ $tripPenyaluranDana->pondok_id == $pondokItem->id ? 'selected' : '' }}>{{ $pondokItem->nama_pondok }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
