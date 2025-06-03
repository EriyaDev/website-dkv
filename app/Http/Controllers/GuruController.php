<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string',
        ]);

        if ($request->file('foto')) {
            $file = $request->file('foto');
            $name = $file->hashName();

            Storage::putFileAs('foto_guru', $file, $name);

            $request['foto'] = $name;
        }

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
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string',
        ]);

        // foto lama guru
        $foto = $guru->foto;

        // Kalau ada file baru diupload, simpan file-nya
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($guru->foto) {
                Storage::delete('foto_guru/' . $guru->foto);
            }

            $file = $request->file('foto');
            $name = $file->hashName();
            Storage::putFileAs('foto_guru', $file, $name);
            $foto = $name; // nama file baru
        }

        $guru->update([
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'foto' => $foto,
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
