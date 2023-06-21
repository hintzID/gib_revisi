@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Peran</h1>

        <form action="{{ route('peran.update', $peran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="peran">Peran</label>
                <input type="text" name="peran" class="form-control" value="{{ $peran->peran }}" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="{{ $peran->keterangan }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('peran.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
