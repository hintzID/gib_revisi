@extends('layouts.app')

@section('content')
    <div class="container border p-3">
        <h1>Daftar Calon Mitra</h1>

        <a href="{{ route('calon-mitra.create') }}" class="btn btn-primary m-3">Tambah Calon Mitra</a>

        <form action="{{ route('calon-mitra.index') }}" method="GET" class="form-control p-3">
            <div class="input-group">
                <input type="text" name="search" placeholder="Cari..." class="form-control">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <table class="table table-bordered mt-3 text-center">
            <thead>
                <tr>
                    <th>Nama Pondok</th>
                    <th>Alamat</th>
                    <th>Tanggal Berdiri</th>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calonMitras as $calonMitra)
                    <tr>
                        <td>{{ $calonMitra->nama_pondok }}</td>
                        <td>{{ $calonMitra->alamat }}</td>
                        <td>{{ $calonMitra->tanggal_berdiri }}</td>
                        <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                        <td class="gap-2">
                            <a href="{{ route('calon-mitra.show', $calonMitra) }}" class="btn btn-success">Detail</a>
                            <a href="{{ route('calon-mitra.edit', $calonMitra) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('calon-mitra.destroy', $calonMitra) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $calonMitras->links() }}
    </div>
@endsection
