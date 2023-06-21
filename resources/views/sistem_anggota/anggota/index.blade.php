@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Anggota</h1>
        <div class="mb-4">
            <a href="{{ route('anggota.create') }}" class="btn btn-primary">Masukkan Anggota</a>
        </div>

        <div class="mb-3">
            <form action="{{ route('anggota.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari anggota..." value="{{ $keyword }}">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Verifikasi Calon Anggota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->verifikasiCalonAnggota->calonAnggota->nama_lengkap }}</td>
                        <td>{{ $item->verifikasiCalonAnggota->calonAnggota->alamat_lengkap }}</td>
                        <td>{{ $item->verifikasiCalonAnggota->verifikasi ? 'Terverifikasi' : 'Belum Verifikasi' }}</td>
                        <td>
                            <a href="{{ route('anggota.show', $item->id) }}" class="btn btn-primary">Lihat</a>
                            <a href="{{ route('anggota.edit', $item->verifikasiCalonAnggota->calonAnggota->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $anggota->links() }}
    </div>
@endsection
