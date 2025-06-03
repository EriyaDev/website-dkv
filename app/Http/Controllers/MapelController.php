<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mapel::orderBy('id', 'desc')->get();
        return view('Admin.mapel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required'
        ]);

        $data = [
            'nama_mapel' => $request->nama_mapel
        ];

        Mapel::create($data);
        return redirect('/admin/mapel')->with('success', 'data successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Mapel::where('id', $id)->first();
        return view('Admin.mapel.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Mapel::where('id', $id)->first();
        return view('Admin.mapel.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mapel' => 'required'
        ]);

        $data = [
            'nama_mapel' => $request->nama_mapel
        ];

        Mapel::where('id', $id)->update($data);
        return redirect('/admin/mapel')->with('success', 'data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mapel::where('id', $id)->delete();
        return redirect('/admin/mapel')->with('success', 'data successfully deleted!');
    }
}
