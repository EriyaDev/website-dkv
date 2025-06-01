<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapels';
    protected $fillable = [
        'nama_mapel',
    ];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'mapel_id');
    }
}
