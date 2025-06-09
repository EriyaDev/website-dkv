<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $user = auth()->user();
        $guru = $user->guru;

        if (!$guru) {
            return redirect()->intended('/konfirmasi');
        }

        // return $guru;
        // $senin = Jadwal::all();
        $senin = Jadwal::where('hari', 'Senin')->where('guru_id', $guru->id)->orderBy('id', 'asc')->get();
        $selasa = Jadwal::where('hari', 'Selasa')->where('guru_id', $guru->id)->orderBy('id', 'asc')->get();
        $rabu = Jadwal::where('hari', 'Rabu')->where('guru_id', $guru->id)->orderBy('id', 'asc')->get();
        $kamis = Jadwal::where('hari', 'Kamis')->where('guru_id', $guru->id)->orderBy('id', 'asc')->get();
        $jumat = Jadwal::where('hari', 'Jumat')->where('guru_id', $guru->id)->orderBy('id', 'asc')->get();
        $sabtu = Jadwal::where('hari', 'Sabtu')->where('guru_id', $guru->id)->orderBy('id', 'asc')->get();

        // return $selasa;
        return view('Guru.dashboard', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'guru', 'user'));

        // return view('Guru.dashboard', compact('guru'));
    }

    public function jadwal()
    {
        $user = auth()->user();
        $guru = $user->guru;
        $jadwals = Jadwal::where('guru_id', $guru->id)
            ->with(['kelas', 'guru', 'mapel', 'ruang', 'jam_pelajaran'])
            ->get();

        return view('Guru.Jadwal.index', compact('jadwals'));
    }
}
