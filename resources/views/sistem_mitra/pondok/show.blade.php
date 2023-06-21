@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Pondok</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pondok.index') }}">Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Calon Mitra:</strong>
                    {{ $pondok->calonMitra->nama_pondok }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rencana Penyaluran:</strong>
                    {{ $pondok->rencana_penyaluran }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact Person:</strong>
                    {{ $pondok->contact_person }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. HP Contact Person:</strong>
                    {{ $pondok->no_hp_contact_person }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    {{ $pondok->keterangan }}
                </div>
            </div>
        </div>
    </div>
@endsection
