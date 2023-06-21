@extends('layouts.app')

@section('content')
    <div class="container border border-dark p-5">
        <h1 class="text-center m-3 border p-2 text-dark rounded border-dark">Formulir Pendaftaran Anggota PASKAS/GIB SOLO
        </h1>

        <!-- Form Tambah Calon Anggota -->
        <form action="{{ route('calon-anggota.store') }}" method="POST">
            @csrf
            <b>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" class="form-control" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="tempat_lahir">Kota Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="alamat_lengkap">Alamat Lengkap</label>
                    <textarea name="alamat_lengkap" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="no_hp">No.Telp / WA</label>
                    <input type="text" name="no_hp" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="organisasi_diikuti">Komunitas / Organisasi yang Diikuti</label>
                    <textarea name="organisasi_diikuti" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="tentang_paskas">Apa yang Diketahui tentang PASKAS/GIB</label>
                    <textarea name="tentang_paskas" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="checkbox" name="pilar_paskas" class="">
                    <label style="display: inline" for="pilar_paskas">Konfirmasi kemampuan untuk melaksanakan pilar dakwah
                        PASKAS (Birrul Walidain, Membaca Al Qur'an 1 hari 1 halaman, Sholat Tepat Awal Waktu dan Infaq
                        minimal 25.000 sebulan) </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="doa_harapan">Do’a dan Harapan terhadap PASKAS</label>
                    <textarea name="doa_harapan" class="form-control" required></textarea>
                </div>
            </b>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            @auth
                <a href="{{ route('calon-anggota.index') }}" class="btn btn-secondary">Kembali</a>
            @endauth
        </form>
    </div>
@endsection
