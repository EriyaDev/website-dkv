<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\JamPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Jadwal::orderBy('id', 'desc')->with('guru')->get();

        return view('Admin.Jadwal.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Guru::orderBy('id', 'asc')->with('user')->get();
        // $nama_guru = User::orderBy('id', 'asc')->with('')
        $rooms =  Ruang::all();
        $classes = Kelas::all();
        $mapels = Mapel::all();
        $jamPelajarans = JamPelajaran::all();


        return view('Admin.Jadwal.create', compact('teachers', 'rooms', 'classes', 'mapels', 'jamPelajarans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'hari' => 'required|string|max:15|unique:jadwals,hari',
            'guru_id' => 'required|string|exists:users,id',
            'kelas_id' => 'required|string|exists:kelass,id',
            'mapel_id' => 'required|string|exists:mapels,id',
            'ruang_id' => 'required|string|exists:ruangs,id',
            'jam_pelajaran_id' => 'required|string|exists:jam_pelajarans,id',
        ]);

        Jadwal::create([
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'jam_pelajaran_id' => $request->jam_pelajaran_id,
            'ruang_id' => $request->ruang_id,
        ]);

        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        $teachers = Guru::orderBy('id', 'asc')->with('user')->get();
        // $nama_guru = User::orderBy('id', 'asc')->with('')
        $rooms =  Ruang::all();
        $classes = Kelas::all();
        $mapels = Mapel::all();
        $jamPelajarans = JamPelajaran::all();

        return view('Admin.Jadwal.show', compact('jadwal', 'teachers', 'rooms', 'classes', 'mapels', 'jamPelajarans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        $teachers = Guru::orderBy('id', 'asc')->with('user')->get();
        // $nama_guru = User::orderBy('id', 'asc')->with('')
        $rooms =  Ruang::all();
        $classes = Kelas::all();
        $mapels = Mapel::all();
        $jamPelajarans = JamPelajaran::all();

        // return $jadwal;
        return view('Admin.Jadwal.edit', compact('jadwal', 'teachers', 'rooms', 'classes', 'mapels', 'jamPelajarans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'hari' => 'required|string|max:15|unique:jadwals,hari',
            'guru_id' => 'required|string|exists:users,id',
            'kelas_id' => 'required|string|exists:kelass,id',
            'mapel_id' => 'required|string|exists:mapels,id',
            'ruang_id' => 'required|string|exists:ruangs,id',
            'jam_pelajaran_id' => 'required|string|exists:jam_pelajarans,id',
        ]);

        $jadwal->update([
            'hari' => $request->hari,
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'jam_pelajaran_id' => $request->jam_pelajaran_id,
            'ruang_id' => $request->ruang_id,
        ]);

        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil diedit!');
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
