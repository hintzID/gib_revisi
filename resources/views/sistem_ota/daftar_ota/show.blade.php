@extends('layouts.app')

@section('content')
    <div class="container border">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left border p-3 m-3">
                    <h2>Detail Daftar OTA</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-primary" href="{{ route('daftar-ota.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th class="col-2">Nama:</th>
                <td>{{ $daftarOta->nama }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin:</th>
                <td>{{ $daftarOta->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Pekerjaan:</th>
                <td>{{ $daftarOta->pekerjaan }}</td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td>{{ $daftarOta->alamat }}</td>
            </tr>
            <tr>
                <th>Nomor HP:</th>
                <td>{{ $daftarOta->nomor_hp }}</td>
            </tr>
            <tr>
                <th>Anggota:</th>
                <td>{{ $daftarOta->anggota->id }}</td>
            </tr>
        </table>
    </div>
@endsection
