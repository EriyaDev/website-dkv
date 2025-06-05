<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $user = auth()->user();
        $guru = $user->guru;
        return view('Guru.dashboard', compact('guru'));
    }

    public function jadwal()
    {
        $user = auth()->user();
        $guru = $user->guru;
        $jadwals = Jadwal::where('guru_id', $user->id)
            ->with(['kelas','guru', 'mapel', 'ruang', 'jam_pelajaran'])
            ->get();

        return view('Guru.jadwal.index', compact('jadwals'));
    }
}
