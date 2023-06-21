@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Detail Anggota</div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Anggota ID</th>
                                    <td>{{ $anggota->id}}</td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->nama_lengkap}}</td>
                                </tr>
                                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->email}}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->gender}}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->tempat_lahir}}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->alamat_lengkap}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->status}}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <th>Nomor HP/ WA</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->no_hp}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
