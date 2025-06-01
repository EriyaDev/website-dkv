<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';

    protected $fillable = [
        'user_id',
        'nip',
        'foto',
        'nama_guru',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'guru_id');
    }
}
