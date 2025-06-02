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
        $teachers = Guru::where('id', $id)->first();
        return view('Admin.Guru.show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);
        $teachers = User::all();
        return view('Admin.Guru.edit', compact('guru', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'nip' => 'required|integer',
            'foto' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string',
        ]);
        
        $teacher= [
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'foto' => $request->foto,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ];

        Guru::where('id', $id)->update($teacher);
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guru::where('id', $id)->delete();
        return redirect(route('admin.guru.index'))->with('success', 'data successfully deleted!');
    }
}
