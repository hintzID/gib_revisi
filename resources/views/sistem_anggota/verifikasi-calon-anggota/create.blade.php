@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Verifikasi Anggota</h1>
        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('verifikasi-calon-anggota.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="calon_anggota_id">Nama Anggota</label>
                <select name="calon_anggota_id" class="form-control" required>
                    <option value="">Pilih Anggota</option>
                    @foreach ($calonAnggota as $a)
                        <option value="{{ $a->id }}">{{ $a->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>
            
            <br>
            <div class="form-group">
                <label for="verifikasi">Verifikasi</label>
                <select name="verifikasi" class="form-control" required>
                    <option value="0">Belum Terverifikasi</option>
                    <option value="1">Terverifikasi</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea name="catatan" class="form-control" rows="4" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('verifikasi-calon-anggota.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
