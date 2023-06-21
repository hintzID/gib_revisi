@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Peran</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>Peran</th>
                    <td>{{ $peran->peran }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $peran->keterangan }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('peran.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
