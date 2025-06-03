<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ruang::all();
        return view('Admin.ruang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ruang' => 'required',
            'nama_gedung' => 'required'
        ]);

        $data = [
            'nama_ruang' => $request->nama_ruang,
            'nama_gedung' => $request->nama_gedung
        ];

        Ruang::create($data);
        return redirect('/admin/ruang')->with('success', 'data successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Ruang::where('id', $id)->first();
        return view('Admin.ruang.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Ruang::where('id', $id)->first();
        return view('Admin.ruang.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruang' => 'required',
            'nama_gedung' => 'required'
        ]);

        $data = [
            'nama_ruang' => $request->nama_ruang,
            'nama_gedung' => $request->nama_gedung
        ];

        Ruang::where('id', $id)->update($data);
        return redirect('/admin/ruang')->with('success', 'data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ruang::where('id', $id)->delete();
        return redirect('/admin/ruang')->with('success', 'data successfully deleted!');
    }
}
