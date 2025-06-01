<?php

namespace App\Models;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
use App\Models\JamPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [
        'guru_id',
        'kelas_id',
        'mapel_id',
        'ruang_id',
        'hari',
        'jam_ke_mulai_id',
        'jam_ke_selesai_id',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'ruang_id');
    }

    public function jamKeMulai()
    {
        return $this->belongsTo(JamPelajaran::class, 'jam_ke_mulai_id', 'id');
    }

    public function jamKeSelesai()
    {
        return $this->belongsTo(JamPelajaran::class, 'jam_ke_selesai_id', 'id');
    }
}
