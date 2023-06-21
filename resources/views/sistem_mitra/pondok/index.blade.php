@extends('layouts.app')

@section('content')
<div class="container border rounded p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pondok List</h2>
            </div>
            <div class="pull-right m-2">
                <a class="btn btn-success" href="{{ route('pondok.create') }}">Add New Pondok</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form class="form-inline" action="{{ route('pondok.index') }}" method="GET">
        <div class="form-group input-group border p-3 mb-2">
            <input type="text" class="form-control" name="search" placeholder="Search">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Rencana Penyaluran</th>
            <th>Contact Person</th>
            <th>No. HP Contact Person</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pondoks as $pondok)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pondok->rencana_penyaluran }}</td>
            <td>{{ $pondok->contact_person }}</td>
            <td>{{ $pondok->no_hp_contact_person }}</td>
            <td>{{ $pondok->keterangan }}</td>
            <td>
                <form action="{{ route('pondok.destroy', $pondok->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pondok.show', $pondok->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pondok.edit', $pondok->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $pondoks->links() !!}
</div>
@endsection
