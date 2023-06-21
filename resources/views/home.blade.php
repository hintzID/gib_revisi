@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Daftar Link : ') }}
                    <br><br>
                    <h2>pengaturan anggota</h2>
                    <p><a href="/calon-anggota">Calon Anggota</a></p>
                    <p><a href="/verifikasi-calon-anggota">Verifikasi Calon Anggota</a></p>
                    <p><a href="/anggota">Daftar Anggota</a></p>

                    <h2>pengaturan User</h2>
                    <p><a href="/peran">Daftar Peran</a></p>
                    <p><a href="/user">Daftar User</a></p>

                    <h2>pengaturan Pondok/Mitra</h2>
                    <p><a href="/calon-mitra">Calon Mitra</a></p>
                    <p><a href="/pondok">Daftar Pondok</a></p>

                    <h2>Pengaturan Sistem Donasi</h2>
                    <p><a href="/daftar_trip">Daftar Trip</a></p>
                    <p><a href="/trip-penyaluran-dana">Trip Penyaluran Dana</a></p>

                    <h2>Pengaturan OTA</h2>
                    <p><a href="/daftar-ota">Daftar OTA</a></p>
                    {{-- <p><a href="/trip-penyaluran-dana">Trip Penyaluran Donasi</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
