<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return view('Guru.dashboard');
    }

    public function jadwal()
    {
        $guru = auth()->user();
        $jadwals = Jadwal::where('guru_id', $guru->id)
            ->with(['kelas','guru', 'mapel', 'ruang', 'jam_pelajaran'])
            ->get();

        return view('Guru.jadwal.index', compact('jadwals'));
    }
}
