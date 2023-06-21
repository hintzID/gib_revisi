@extends('layouts.app')

@section('content')
    <div class="container border border-dark p-3 rounded">
        <h1 class="border border-dark rounded p-3 text-center m-3">Detail Calon Anggota</h1>

        <table class="table table-bordered rounded">
            <tr>
                <th>ID</th>
                <td>{{ $calonAnggota->id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $calonAnggota->email }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $calonAnggota->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $calonAnggota->gender}}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $calonAnggota->tempat_lahir}}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $calonAnggota->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th>Alamat Lengkap</th>
                <td>{{ $calonAnggota->alamat_lengkap}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $calonAnggota->status}}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{ $calonAnggota->pekerjaan}}</td>
            </tr>
            <tr>
                <th>Nomor HP/WA</th>
                <td>{{ $calonAnggota->no_hp}}</td>
            </tr>
            <tr>
                <th>Organisasi Diikuti</th>
                <td>{{ $calonAnggota->organisasi_diikuti }}</td>
            </tr>
            <tr>
                <th>Tentang Paskas</th>
                <td>{{ $calonAnggota->tentang_paskas }}</td>
            </tr>
            <tr>
                <th>Pilar PASKAS</th>
                <td>{{ $calonAnggota->pilar_paskas ? 'sanggup' : 'tidak sanggup' }}</td>
            </tr>
            <tr>
                <th>Do'a dan Harapan</th>
                <td>{{ $calonAnggota->doa_harapan }}</td>
            </tr>
        </table>

        <a href="{{ route('calon-anggota.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
