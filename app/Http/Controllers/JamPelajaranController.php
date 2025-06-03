<?php

namespace App\Http\Controllers;

use App\Models\JamPelajaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JamPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = JamPelajaran::all();
        return view('Admin.jam_pelajaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.jam_pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jam_pelajaran_ke' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required'
        ]);

        $data = [
            'jam_pelajaran_ke' => $request->jam_pelajaran_ke,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ];

        JamPelajaran::create($data);
        return redirect('/admin/jam-pelajaran')->with('success', 'data successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = JamPelajaran::where('id', $id)->first();
        $jam_mulai = Carbon::parse($data->jam_mulai)->format('H:i');
        $jam_selesai = Carbon::parse($data->jam_selesai)->format('H:i');
        return view('Admin.jam_pelajaran.view', compact('data', 'jam_mulai', 'jam_selesai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = JamPelajaran::where('id', $id)->first();
        $jam_mulai = Carbon::parse($data->jam_mulai)->format('H:i');
        $jam_selesai = Carbon::parse($data->jam_selesai)->format('H:i');
        return view('Admin.jam_pelajaran.edit', compact('data', 'jam_mulai', 'jam_selesai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jam_pelajaran_ke' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $data = [
            'jam_pelajaran_ke' => $request->jam_pelajaran_ke,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ];

        JamPelajaran::where('id', $id)->update($data);
        return redirect('/admin/jam-pelajaran')->with('success', 'data successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        JamPelajaran::where('id', $id)->delete();
        return redirect('/admin/jam-pelajaran')->with('success', 'data successfully deleted!');
    }
}
