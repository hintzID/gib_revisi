@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Detail Trip Penyaluran Dana</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('trip-penyaluran-dana.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <strong>Urutan Trip:</strong>
            {{ $tripPenyaluranDana->urutan_trip }}
        </div>

        <div class="form-group">
            <strong>Trip:</strong>
            {{ $tripPenyaluranDana->daftarTrip->nama_trip }}
        </div>

        <div class="form-group">
            <strong>Pondok:</strong>
            {{ $tripPenyaluranDana->pondok->calonMitra->nama_pondok }}
        </div>
    </div>
@endsection
