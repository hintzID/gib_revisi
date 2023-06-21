<?php

namespace App\Http\Controllers;

use App\Models\DaftarTrip;
use Illuminate\Http\Request;

class DaftarTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarTrips = DaftarTrip::all();

        return view('sistem_donasi.daftar_trip.index', compact('daftarTrips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistem_donasi.daftar_trip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_trip' => 'required',
            'keterangan' => 'nullable',
        ]);

        $daftarTrip = new DaftarTrip;
        $daftarTrip->nama_trip = $request->nama_trip;
        $daftarTrip->keterangan = $request->keterangan;
        $daftarTrip->save();

        return redirect()->route('daftar_trip.index')
            ->with('success', 'Daftar Trip berhasil ditambahkan');
    }


    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\DaftarTrip  $daftarTrip
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(DaftarTrip $daftarTrip)
    // {
    //     return view('daftar_trip.show', compact('daftarTrip'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarTrip  $daftarTrip
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarTrip $daftarTrip)
    {
        return view('sistem_donasi.daftar_trip.edit', compact('daftarTrip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarTrip  $daftarTrip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarTrip $daftarTrip)
    {
        $request->validate([
            'nama_trip' => 'required',
            'keterangan' => 'nullable',
        ]);

        $daftarTrip->update($request->all());

        return redirect()->route('daftar_trip.index')
            ->with('success', 'Daftar Trip berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarTrip  $daftarTrip
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarTrip $daftarTrip)
    {
        $daftarTrip->delete();

        return redirect()->route('daftar_trip.index')
            ->with('success', 'Daftar Trip berhasil dihapus');
    }
}
