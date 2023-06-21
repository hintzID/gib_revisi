<?php

namespace App\Http\Controllers;

use App\Models\TripPenyaluranDana;
use App\Models\DaftarTrip;
use App\Models\Pondok;
use Illuminate\Http\Request;

class TripPenyaluranDanaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = TripPenyaluranDana::query();

        if ($search) {
            $query->where('urutan_trip', 'LIKE', '%' . $search . '%');
        }

        $tripPenyaluranDana = $query->paginate(10);

        return view('sistem_donasi.trip_penyaluran_dana.index', compact('tripPenyaluranDana', 'search'));
    }

    public function create(TripPenyaluranDana $tripPenyaluranDana)
    {
        $daftarTrip = DaftarTrip::all();
        $pondok = Pondok::all();
        return view('sistem_donasi.trip_penyaluran_dana.create', compact('tripPenyaluranDana', 'daftarTrip','pondok'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trip_id' => 'required',
            'pondok_id' => 'required',
            'urutan_trip' => 'required',
        ]);

        TripPenyaluranDana::create($request->all());

        return redirect()->route('trip-penyaluran-dana.index')->with('success', 'Trip Penyaluran Dana berhasil ditambahkan');
    }

    public function show(TripPenyaluranDana $tripPenyaluranDana)
    {
        return view('sistem_donasi.trip_penyaluran_dana.show', compact('tripPenyaluranDana'));
    }

    public function edit(TripPenyaluranDana $tripPenyaluranDana)
    {
        $daftarTrip = DaftarTrip::all();
        $pondok = Pondok::all();
        return view('sistem_donasi.trip_penyaluran_dana.edit', compact('tripPenyaluranDana', 'daftarTrip','pondok'));
    }

    public function update(Request $request, TripPenyaluranDana $tripPenyaluranDana)
    {
        $request->validate([
            'trip_id' => 'required',
            'pondok_id' => 'required',
            'urutan_trip' => 'required',
        ]);

        $tripPenyaluranDana->update($request->all());

        return redirect()->route('trip-penyaluran-dana.index')->with('success', 'Trip Penyaluran Dana berhasil diperbarui');
    }

    public function destroy(TripPenyaluranDana $tripPenyaluranDana)
    {
        $tripPenyaluranDana->delete();

        return redirect()->route('trip-penyaluran-dana.index')->with('success', 'Trip Penyaluran Dana berhasil dihapus');
    }
}
