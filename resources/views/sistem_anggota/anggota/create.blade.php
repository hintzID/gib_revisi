@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Anggota Baru</h1>
        
        @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
       @endif
    
    
        <form action="{{ route('anggota.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="verifikasi_calon_anggota_id">Verifikasi Calon Anggota</label>
                <select name="verifikasi_calon_anggota_id" class="form-control">
                    @foreach ($verifikasiCalonAnggota as $a)
                        <option value="{{ $a->id }}">{{ $a->calonAnggota->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>
<br><br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script>
        setTimeout(function() {
            var alertElement = document.querySelector('.alert');
            if (alertElement) {
                alertElement.style.display = 'none';
            }
        }, 2000);
    </script>
    
@endsection
