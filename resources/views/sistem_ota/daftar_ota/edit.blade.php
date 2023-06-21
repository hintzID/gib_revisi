@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Daftar OTA</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('daftar-ota.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Terdapat masalah dengan inputan Anda. Silakan periksa kembali.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('daftar-ota.update', $daftarOta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="nama" value="{{ $daftarOta->nama }}" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Kelamin:</strong>
                        <input type="text" name="jenis_kelamin" value="{{ $daftarOta->jenis_kelamin }}" class="form-control" placeholder="Jenis Kelamin">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pekerjaan:</strong>
                        <input type="text" name="pekerjaan" value="{{ $daftarOta->pekerjaan }}" class="form-control" placeholder="Pekerjaan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{ $daftarOta->alamat }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nomor HP:</strong>
                        <input type="text" name="nomor_hp" value="{{ $daftarOta->nomor_hp }}" class="form-control" placeholder="Nomor HP">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Anggota:</strong>
                        <select class="form-control" name="anggota_id">
                            @foreach ($anggota as $a)
                                <option value="{{ $a->id }}" @if($daftarOta->anggota_id == $a->id) selected @endif>{{ $a->id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>

        </form>
    </div>
@endsection
