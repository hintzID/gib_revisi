@extends('layouts.app')

@section('content')
    <div class="container border p-3 rounded">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mb-3">
                    <a class="btn btn-primary" href="{{ route('pondok.index') }}">Back</a>
                </div>
                <div class="pull-left">
                    <h2>Tambah Data Pondok</h2>
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

        <form action="{{ route('pondok.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Calon Mitra:</strong>
                        <select class="form-control" name="calon_mitra_id" {{ $calonMitra->isEmpty() ? 'disabled' : '' }}>
                            @if ($calonMitra->isEmpty())
                                <option value="">Tidak ada data calon mitra</option>
                            @else
                                @foreach ($calonMitra as $mitra)
                                    <option value="{{ $mitra->id }}">{{ $mitra->nama_pondok }}</option>
                                @endforeach
                            @endif
                        </select>
                        @if ($calonMitra->isEmpty())
                            <small class="text-danger">Tidak ada data calon mitra yang tersedia.</small>
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rencana Penyaluran:</strong>
                        <input type="text" name="rencana_penyaluran" class="form-control"
                            placeholder="Rencana Penyaluran">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact Person:</strong>
                        <input type="text" name="contact_person" class="form-control" placeholder="Contact Person">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No. HP Contact Person:</strong>
                        <input type="text" name="no_hp_contact_person" class="form-control"
                            placeholder="No. HP Contact Person">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
