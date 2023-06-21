@extends('layouts.app')

@section('content')
    <div class="container border border-dark p-3 rounded">
        <h1 class="text-center border border-dark p-3 rounded">Daftar Verifikasi Anggota</h1>
        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="mb-4">
            <a href="{{ route('verifikasi-calon-anggota.create') }}" class="btn btn-success m-2">Tambah Calon Anggota</a>
        </div>

        <div class="mb-3">
            <form action="{{ route('verifikasi-calon-anggota.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari nama anggota" name="keyword"
                        value="{{ $keyword }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Anggota</th>
                    <th>Verifikasi</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($verifikasiAnggota as $verifikasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $verifikasi->calonAnggota->nama_lengkap }}</td>
                        <td>{{ $verifikasi->verifikasi ? 'Terverifikasi' : 'Belum Terverifikasi' }}</td>
                        <td>{{ $verifikasi->catatan }}</td>
                        <td class="">
                            <a href="{{ route('verifikasi-calon-anggota.show', $verifikasi->id) }}"
                                class="btn btn-info">Detail</a>
                            <a href="{{ route('verifikasi-calon-anggota.edit', $verifikasi->id) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ route('verifikasi-calon-anggota.destroy', $verifikasi->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus verifikasi anggota ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $verifikasiAnggota->appends(['keyword' => $keyword])->links() }}
        </div>
    </div>
@endsection
