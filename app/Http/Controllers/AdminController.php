<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        dd($jadwal);
        return view('Admin.dashboard', compact('jadwal'));
    }
}
