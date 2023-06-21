@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Verifikasi Anggota</h1>

        <form action="{{ route('verifikasi-calon-anggota.update', $verifikasiAnggota->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="calon_anggota_id" class="form-control" value="{{ $verifikasiAnggota->calon_anggota_id }}" required readonly>

            <div class="form-group">
                <label for="calon_anggota_id">Nama Calon Anggota</label>
                    <input type="text" name="calon_anggota_id" class="form-control" value="{{ $verifikasiAnggota->calonAnggota->nama_lengkap }}" disabled>
            </div>

            <div class="form-group">
                <label for="verifikasi">Verifikasi</label>
                <select name="verifikasi" class="form-control" required>
                    <option value="1" {{ $verifikasiAnggota->verifikasi ? 'selected' : '' }}>Terverifikasi</option>
                    <option value="0" {{ !$verifikasiAnggota->verifikasi ? 'selected' : '' }}>Belum Terverifikasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea name="catatan" class="form-control">{{ $verifikasiAnggota->catatan }}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('verifikasi-calon-anggota.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
