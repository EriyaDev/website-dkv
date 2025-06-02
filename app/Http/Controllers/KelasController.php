<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('Admin.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $data = [
            'nama_kelas' => $request->nama_kelas
        ];

        Kelas::create($data);
        return redirect('/admin/kelas')->with('success', 'Kelas berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        return view('Admin.kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        return view('Admin.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $kelas = [
            'nama_kelas' => $request->nama_kelas
        ];

        Kelas::where('id', $id)->update($kelas);
        return redirect('/admin/kelas')->with('success', 'data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    Kelas::where('id', $id)->delete();
    return redirect('/admin/kelas')->with('success', 'data successfully deleted!');
    }
}
