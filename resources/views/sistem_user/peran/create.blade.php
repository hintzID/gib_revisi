@extends('layouts.app')

@section('content')
    <div class="container border bordered p-3 rounded">
        <h1 class="text-center">Tambah Peran Baru</h1>

        <form action="{{ route('peran.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="peran">Peran</label>
                <input type="text" name="peran" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('peran.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
