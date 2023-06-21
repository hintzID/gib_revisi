<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peran;
use App\Models\Anggota;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $users = User::with(['peran', 'anggota'])
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        return view('sistem_user.user.index', compact('users', 'search'));
    }

    public function create()
    {
        $peran = Peran::all();
        $anggota = Anggota::doesntHave('user')->get();
        return view('sistem_user.user.create', compact('peran', 'anggota'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'peran_id' => 'nullable|exists:peran,id',
            'anggota_id' => 'nullable|exists:anggota,id',
        ]);

        User::create($request->all());

        return redirect()->route('user.index')
            ->with('success', 'User berhasil ditambahkan.');
    }

    public function show($id)
    {
        $user = User::with(['peran', 'anggota'])->findOrFail($id);

        return view('sistem_user.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::with(['peran', 'anggota'])->findOrFail($id);
        $peran = Peran::all();
        $anggota = Anggota::all();

        return view('sistem_user.user.edit', compact('user', 'peran', 'anggota'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email|unique:users,email,' . $id,
        //     'password' => 'nullable|min:6',
        //     'peran_id' => 'nullable|exists:peran,id',
        //     'anggota_id' => 'nullable|unique:anggota,id',
        // ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('user.index')
            ->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
