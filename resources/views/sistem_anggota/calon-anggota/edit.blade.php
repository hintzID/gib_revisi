@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Calon Anggota</h1>

        <form action="{{ route('calon-anggota.update', $calonAnggota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $calonAnggota->email }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $calonAnggota->nama_lengkap }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" class="form-control" required>
                    <option value="Laki-Laki" {{ $calonAnggota->gender == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ $calonAnggota->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>  
            <br>          
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{ $calonAnggota->tempat_lahir }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $calonAnggota->tanggal_lahir }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap</label>
                <textarea name="alamat_lengkap" class="form-control" required>{{ $calonAnggota->alamat_lengkap }}</textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="Menikah" {{ $calonAnggota->status == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Belum Menikah" {{ $calonAnggota->status == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                    <option value="Janda" {{ $calonAnggota->status == 'Janda' ? 'selected' : '' }}>Janda</option>
                    <option value="Duda" {{ $calonAnggota->status == 'Duda' ? 'selected' : '' }}>Duda</option>
                </select>
            </div>
            <br>            
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" value="{{ $calonAnggota->pekerjaan }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="no_hp">No.Telp / WA</label>
                <input type="text" name="no_hp" class="form-control" value="{{ $calonAnggota->no_hp }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="organisasi_diikuti">Organisasi Diikuti</label>
                <input type="text" name="organisasi_diikuti" class="form-control" value="{{ $calonAnggota->organisasi_diikuti }}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="tentang_paskas">Tentang PASKAS</label>
                <input type="text" name="tentang_paskas" class="form-control" value="{{ $calonAnggota->tentang_paskas }}" required>
            </div>
            <br>
            <div class="form-group">
                <input type="checkbox" name="pilar_paskas" class="" {{ $calonAnggota->pilar_paskas ? 'checked' : '' }}>
                <label for="pilar_paskas" style="display:inline" >Konfirmasi kemampuan untuk melaksanakan pilar dakwah PASKAS (Birrul Walidain, Membaca Al Qur'an 1 hari 1 halaman, Sholat Tepat Awal Waktu dan Infaq minimal 25.000 sebulan) </label>
            </div>
            <br>
            <div class="form-group">
                <label for="doa_harapan">Do'a & Harapan</label>
                <input type="text" name="doa_harapan" class="form-control" value="{{ $calonAnggota->doa_harapan }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('calon-anggota.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
