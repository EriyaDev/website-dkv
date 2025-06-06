<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruangs';
    protected $fillable = [
        'nama_ruang',
        'nama_gedung',
    ];
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'ruang_id');
    }
}
