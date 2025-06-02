<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Guru::all();

        return view('Admin.Guru.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = User::all();

        return view('Admin.Guru.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return request()->all();
        $request->validate([
            'user_id' => 'required|integer',
            'nip' => 'required|integer',
            'foto' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string',
        ]);

        Guru::create([
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'foto' => $request->foto,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);


        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $guru = Guru::findOrFail($id);
        $teachers = Guru::all();

        return view('Admin.Guru.show', compact('id', 'teachers', 'guru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);

        $teachers = Guru::all();

        return view('Admin.Guru.edit', compact('id', 'teachers', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'nip' => 'required|integer',
            'foto' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string',
        ]);


        $guru->update([
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'foto' => $request->foto,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil dihapus');
    }
}
