@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Peran</h1>

        <div class="mb-3">
            <a href="{{ route('peran.create') }}" class="btn btn-primary">Tambah Peran</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Peran</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peran as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->peran }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('peran.show', $item->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('peran.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('peran.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peran ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
