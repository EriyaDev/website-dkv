<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JamPelajaran extends Model
{
    use HasFactory;

    protected $table = 'jam_pelajarans';
    protected $fillable = [
        'jam_pelajaran_ke',
        'jam_mulai',
        'jam_selesai',
    ];
    protected $casts = [
        'jam_mulai' => 'datetime:H:i',
        'jam_selesai' => 'datetime:H:i',
    ];
    public function jadwalMulai()
    {
        return $this->hasMany(Jadwal::class, 'jam_ke_mulai_id');
    }

    public function jadwalSelesai()
    {
        return $this->hasMany(Jadwal::class, 'jam_ke_selesai_id');
    }
}
