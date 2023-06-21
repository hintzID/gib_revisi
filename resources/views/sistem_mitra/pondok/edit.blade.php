@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Pondok</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pondok.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Please fix the following errors:<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pondok.update', $pondok->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Calon Mitra:</strong>
                    <select class="form-control" name="calon_mitra_id" disabled>
                        @foreach ($calonMitra as $mitra)
                            <option value="{{ $mitra->id }}" {{ $pondok->calon_mitra_id == $mitra->id ? 'selected' : '' }}>{{ $mitra->nama_pondok }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="calon_mitra_id" value="{{ $pondok->calon_mitra_id }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rencana Penyaluran:</strong>
                    <input type="text" name="rencana_penyaluran" class="form-control" placeholder="Rencana Penyaluran" value="{{ $pondok->rencana_penyaluran }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact Person:</strong>
                    <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" value="{{ $pondok->contact_person }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. HP Contact Person:</strong>
                    <input type="text" name="no_hp_contact_person" class="form-control" placeholder="No. HP Contact Person" value="{{ $pondok->no_hp_contact_person }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan">{{ $pondok->keterangan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
</div>
@endsection
