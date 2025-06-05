<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        // General info
        $teachers = Guru::all()->count();
        $classes = Kelas::all()->count();
        $rooms = Ruang::all()->count();
        $subjects = Mapel::all()->count();

        // $senin = Jadwal::all();
        $senin = Jadwal::where('hari', 'Senin')->orderBy('id', 'asc')->get();
        $selasa = Jadwal::where('hari', 'Selasa')->orderBy('id', 'asc')->get();
        $rabu = Jadwal::where('hari', 'Rabu')->orderBy('id', 'asc')->get();
        $kamis = Jadwal::where('hari', 'Kamis')->orderBy('id', 'asc')->get();
        $jumat = Jadwal::where('hari', 'Jumat')->orderBy('id', 'asc')->get();
        $sabtu = Jadwal::where('hari', 'Sabtu')->orderBy('id', 'asc')->get();

        // return $selasa;
        return view('Admin.dashboard', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'teachers', 'classes', 'rooms', 'subjects'));
    }
}
