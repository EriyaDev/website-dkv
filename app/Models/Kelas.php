<?php

namespace App\Models;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelass';
    
    protected $fillable = [
        'nama_kelas',
    ];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'kelas_id');
    }
}
