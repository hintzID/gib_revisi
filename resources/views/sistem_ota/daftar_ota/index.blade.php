@extends('layouts.app')

@section('content')
    <div class="container border p-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar OTA</h2>
                </div>
                <div class="pull-right p-2">
                    <a class="btn btn-success" href="{{ route('daftar-ota.create') }}">Tambah Daftar OTA</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <form action="{{ route('daftar-ota.index') }}" method="GET" role="search">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Cari berdasarkan nama, jenis kelamin, pekerjaan, alamat, atau nomor HP">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Fundraiser</th>
                <th>Aksi</th>
            </tr>
            @foreach ($daftarOtas as $key => $daftarOta)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $daftarOta->nama }}</td>
                    <td>{{ $daftarOta->jenis_kelamin }}</td>
                    <td>{{ $daftarOta->pekerjaan }}</td>
                    <td>{{ $daftarOta->alamat }}</td>
                    <td>{{ $daftarOta->nomor_hp }}</td>
                    <td>{{ $daftarOta->anggota->verifikasiCalonAnggota->calonAnggota->nama_lengkap}}</td>
                    <td>
                        <form action="{{ route('daftar-ota.destroy', $daftarOta->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('daftar-ota.show', $daftarOta->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('daftar-ota.edit', $daftarOta->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $daftarOtas->links() }}
    </div>
@endsection
