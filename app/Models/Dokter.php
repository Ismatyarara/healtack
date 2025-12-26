<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';

    protected $fillable = [
        'pengguna_id',
        'spesialisasi',
        'foto',
        'jadwal_praktek_hari',
        'jadwal_praktek_waktu',
        'tempat_praktek',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'pengguna_id');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class);
    }
}
