@extends('layouts.app')

@section('content')
    <div class="container border p-4 rounded border-dark">
        @auth
        <a href="{{ route('calon-mitra.index') }}" class="btn btn-secondary">Kembali</a>
        <br><br>
        @endauth
        <h1 class="text-center border container pt-5 pb-5">FORM Calon Mitra</h1>
        <form action="{{ route('calon-mitra.store') }}" method="POST">
            @csrf

            <div class="container border mt-4 mb-4 p-4 rounded">
                <div class="border mt-5 mb-3 p-2 col-4 rounded">
                    <h3 class="text-center">Identitas Pondok</h3>
                </div>
                <div>
                    <label for="nama_pondok">Nama Pondok:</label>
                    <input type="text" name="nama_pondok" id="nama_pondok" value="{{ old('nama_pondok') }}"
                        class="form-control" required>
                    @error('nama_pondok')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" id="alamat" rows="3" class="form-control" required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="tanggal_berdiri">Tanggal Berdiri:</label>
                    <input type="date" name="tanggal_berdiri" id="tanggal_berdiri" value="{{ old('tanggal_berdiri') }}"
                        class="form-control" required>
                    @error('tanggal_berdiri')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container border mt-4 mb-4 p-4 rounded">
                <div class="border mt-5 mb-3 p-2 col-4 rounded">
                    <h3 class="text-center">Kepengurusan Pondok</h3>
                </div>

                <div>
                    <label for="nama_pimpinan">Nama Pimpinan:</label>
                    <input type="text" name="nama_pimpinan" id="nama_pimpinan" value="{{ old('nama_pimpinan') }}"
                        class="form-control" required>
                    @error('nama_pimpinan')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="profesi">Profesi Pimpinan:</label>
                    <input type="text" name="profesi" id="profesi" value="{{ old('profesi') }}" class="form-control"
                        required>
                    @error('profesi')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="alamat_pimpinan">Alamat Pimpinan:</label>
                    <textarea name="alamat_pimpinan" id="alamat_pimpinan" rows="3" class="form-control" required>{{ old('alamat_pimpinan') }}</textarea>
                    @error('alamat_pimpinan')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="no_hp_pimpinan">No. HP Pimpinan:</label>
                    <input type="text" name="no_hp_pimpinan" id="no_hp_pimpinan" value="{{ old('no_hp_pimpinan') }}"
                        class="form-control" required>
                    @error('no_hp_pimpinan')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_pengurus_menetap">Jumlah Pengurus Menetap:</label>
                    <input type="number" name="jumlah_pengurus_menetap" id="jumlah_pengurus_menetap"
                        value="{{ old('jumlah_pengurus_menetap') }}" class="form-control" required>
                    @error('jumlah_pengurus_menetap')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_pengurus_tidak_menetap">Jumlah Pengurus Tidak Menetap:</label>
                    <input type="number" name="jumlah_pengurus_tidak_menetap" id="jumlah_pengurus_tidak_menetap"
                        value="{{ old('jumlah_pengurus_tidak_menetap') }}" class="form-control" required>
                    @error('jumlah_pengurus_tidak_menetap')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container border mt-4 mb-4 p-4 rounded">
                <div class="border mt-5 mb-3 p-2 col-4 rounded">
                    <h3 class="text-center">Keterangan Anak Asuh</h3>
                </div>
                <div>
                    <label for="jumlah_yatim_piatu">Jumlah Yatim Piatu:</label>
                    <input type="number" name="jumlah_yatim_piatu" id="jumlah_yatim_piatu"
                        value="{{ old('jumlah_yatim_piatu') }}" class="form-control" required>
                    @error('jumlah_yatim_piatu')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_dhuafa">Jumlah Dhuafa:</label>
                    <input type="number" name="jumlah_dhuafa" id="jumlah_dhuafa" value="{{ old('jumlah_dhuafa') }}"
                        class="form-control" required>
                    @error('jumlah_dhuafa')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_dll">Jumlah DLL:</label>
                    <input type="text" name="jumlah_dll" id="jumlah_dll" value="{{ old('jumlah_dll') }}"
                        class="form-control" placeholder="tulis dengan format, misal -> fakir: 12 ; jika tidak ada maka tulis : 0" required>
                    @error('jumlah_dll')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_tk">Jumlah TK:</label>
                    <input type="number" name="jumlah_tk" id="jumlah_tk" value="{{ old('jumlah_tk') }}"
                        class="form-control" required>
                    @error('jumlah_tk')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_sd">Jumlah SD:</label>
                    <input type="number" name="jumlah_sd" id="jumlah_sd" value="{{ old('jumlah_sd') }}"
                        class="form-control" required>
                    @error('jumlah_sd')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_smp">Jumlah SMP:</label>
                    <input type="number" name="jumlah_smp" id="jumlah_smp" value="{{ old('jumlah_smp') }}"
                        class="form-control" required>
                    @error('jumlah_smp')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_sma">Jumlah SMA:</label>
                    <input type="number" name="jumlah_sma" id="jumlah_sma" value="{{ old('jumlah_sma') }}"
                        class="form-control" required>
                    @error('jumlah_sma')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="jumlah_kuliah">Jumlah Kuliah:</label>
                    <input type="number" name="jumlah_kuliah" id="jumlah_kuliah" value="{{ old('jumlah_kuliah') }}"
                        class="form-control" required>
                    @error('jumlah_kuliah')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container border mt-4 mb-4 p-4 rounded">
                <div class="border mt-5 mb-3 p-2 col-4 rounded">
                    <h3 class="text-center">Kondisi Pondok</h3>
                </div>
                <div>
                    <label for="status_milik_tanah">Status Milik Tanah:</label>
                    <input type="text" name="status_milik_tanah" id="status_milik_tanah"
                        value="{{ old('status_milik_tanah') }}" class="form-control" required>
                    @error('status_milik_tanah')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="luas_tanah">Luas Tanah:</label>
                    <input type="text" name="luas_tanah" id="luas_tanah" value="{{ old('luas_tanah') }}"
                        class="form-control" required>
                    @error('luas_tanah')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="keterangan_fasilitas">Keterangan Fasilitas:</label>
                    <textarea name="keterangan_fasilitas" id="keterangan_fasilitas" rows="3" class="form-control" placeholder="Ditulis dengan format, nama_fasilitas(jumlah, kondisi); contoh : masjid(1, baik), kulkas(2, rusak)">{{ old('keterangan_fasilitas') }}</textarea>
                    @error('keterangan_fasilitas')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="sumber_air">Sumber Air:</label>
                    <input type="text" name="sumber_air" id="sumber_air" value="{{ old('sumber_air') }}"
                        class="form-control" required>
                    @error('sumber_air')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container border mt-4 mb-4 p-4 rounded">
                <div class="border mt-5 mb-3 p-2 col-4 rounded">
                    <h3 class="text-center">Penilaian Surveyor</h3>
                </div>
                <div>
                    <label for="tingkat_layak">Tingkat Layak:</label>
                    <input type="text" name="tingkat_layak" id="tingkat_layak" value="{{ old('tingkat_layak') }}"
                        class="form-control" placeholder="pilih antara : layak, belum layak, tidak layak" required>
                    @error('tingkat_layak')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="prioritas">Prioritas:</label>
                    <input type="text" name="prioritas" id="prioritas" value="{{ old('prioritas') }}"
                        class="form-control" placeholder="pilih antara : prioritas, tidak prioritas" required>
                    @error('prioritas')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="form-control btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
