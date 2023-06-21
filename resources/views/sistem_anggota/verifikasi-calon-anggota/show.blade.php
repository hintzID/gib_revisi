@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Verifikasi Anggota</h1>

        <table class="card">
            <tr>
                <th class="card-header" colspan="2">
                    Calon Anggota
                </th>
            </tr>
            <tr>
                <td class="card-body">
                    <strong>ID :</strong>
                </td>
                <td class="card-body">
                    {{ $verifikasiAnggota->calon_anggota_id }}
                </td>
            </tr>
            <!-- Add other information about the candidate member -->
        </table>

        <table class="card mt-4">
            <tr>
                <th class="card-header" colspan="2">
                    Verifikasi
                </th>
            </tr>
            <tr>
                <td class="card-body">
                    <strong>Status :</strong>
                </td>
                <td class="card-body">
                    {{ $verifikasiAnggota->verifikasi ? 'Terverifikasi' : 'Belum Terverifikasi' }}
                </td>
            </tr>
            <tr>
                <td class="card-body">
                    <strong>Catatan :</strong>
                </td>
                <td class="card-body">
                    {{ $verifikasiAnggota->catatan }}
                </td>
            </tr>
        </table>

        <a href="{{ route('verifikasi-calon-anggota.index') }}" class="btn btn-secondary mt-4">Kembali</a>
    </div>
@endsection
