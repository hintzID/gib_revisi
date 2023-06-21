@extends('layouts.app')

@section('content')
    <div class="container border rounded">
        <br>
        <div class="container border col-6 rounded p-2">
        <h1 class="text-center">FORM User Baru</h1>
        </div>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" id="name" class="form-control" value="" required>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Akun</label>
                <select name="email" id="email" class="form-control" required>
                    <option value="">Pilih Nama & Email Anggota</option>
                    @foreach ($anggota as $a)
                        <option value="{{ $a->verifikasiCalonAnggota->calonAnggota->email }}"><b>NAMA</b> : {{ $a->verifikasiCalonAnggota->calonAnggota->nama_lengkap }} ### EMAIL : {{ $a->verifikasiCalonAnggota->calonAnggota->email }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="anggota_id">Konfirmasi Email</label>
                <select name="anggota_id" id="anggota_id" class="form-control" required>
                    <option value="">Pilih Email Dari Akun</option>
                    @foreach ($anggota as $a)
                        <option value="{{ $a->id}}">{{ $a->verifikasiCalonAnggota->calonAnggota->email }} </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="peran_id">Peran</label>
                <select name="peran_id" class="form-control">
                    <option value="">Pilih Peran</option>
                    @foreach ($peran as $p)
                        <option value="{{ $p->id }}">{{ $p->peran }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
            <br><br>
        </form>
    </div>
@endsection
