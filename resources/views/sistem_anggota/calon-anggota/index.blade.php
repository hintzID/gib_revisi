@extends('layouts.app')

@section('content')
    <div class="border border-dark p-3 rounded">
        <h1 class="text-center border p-2 rounded border-dark">Daftar Calon Anggota</h1>

        <!-- Tampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol Tambah -->
        <div class="m-3">
            <a href="{{ route('calon-anggota.create') }}" class="btn btn-success">Tambah Calon Anggota</a>
        </div>

        <!-- Form Pencarian -->
        <form action="{{ route('calon-anggota.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan nama...">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <!-- Tabel Daftar Calon Anggota -->
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($calonAnggota as $anggota)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $anggota->nama_lengkap }}</td>
                        <td>{{ $anggota->email }}</td>
                        <td>
                            <a href="{{ route('calon-anggota.show', $anggota->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('calon-anggota.edit', $anggota->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('calon-anggota.destroy', $anggota->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus calon anggota ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $calonAnggota->links() }}
    </div>
@endsection
