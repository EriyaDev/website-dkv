<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Jadwal::all();

        return view('Admin.Jadwal.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Jadwal.create', compact(''));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required|string|max:5',
            'guru_id' => 'required|string|exists:gurus,id',
            'kelas_id' => 'required|string|exists:kelass,id',
            'mapel_id' => 'required|string|exists:mapels,id',
            'ruang' => 'required|string|exists:ruangs,id',
            'jam_ke_mulai_id' => 'required|string|exists:jam_pelajarans,id',
            'jam_ke_selesai_id' => 'required|string|exists:jam_pelajarans,id',
        ]);

        Jadwal::create([
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'ruang' => $request->ruang,
            'jam_ke_mulai_id' => $request->jam_ke_mulai_id,
            'jam_ke_selesai_id' => $request->jam_ke_selesai_id,
        ]);

        return redirect()->route('admin.jadwal.create')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        return view('Admin.Jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('Admin.Jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'hari' => 'required|string|max:5',
            'guru_id' => 'required|string|exists:gurus,id',
            'kelas_id' => 'required|string|exists:kelass,id',
            'mapel_id' => 'required|string|exists:mapels,id',
            'ruang' => 'required|string|exists:ruangs,id',
            'jam_ke_mulai_id' => 'required|string|exists:jam_pelajarans,id',
            'jam_ke_selesai_id' => 'required|string|exists:jam_pelajarans,id',
        ]);

        $jadwal->update([
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'ruang' => $request->ruang,
            'jam_ke_mulai_id' => $request->jam_ke_mulai_id,
            'jam_ke_selesai_id' => $request->jam_ke_selesai_id,
        ]);

        return redirect()->route('admin.jadwal.create')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('admin.jadwal.index')->with('success', '');
    }
}
