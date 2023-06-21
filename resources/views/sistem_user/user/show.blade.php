@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail User</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-text form-control">Username : {{ $user->name }}</h5>
                <p class="card-text form-control">Peran : <b>{{ $user->peran->peran }}</b></p>
                <hr>
                <h5 class="card-text form-control">Nama : {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->nama_lengkap }}</h5>             
                <h5 class="card-text form-control">Email : {{ $user->email }}</h5>
                <hr>  
                <p class="card-text">Terdaftar pada : {{ $user->created_at }}</p>
            </div>
        </div>

        <a href="{{ route('user.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
