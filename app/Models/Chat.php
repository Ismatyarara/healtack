<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';

    protected $fillable = [
        'pengguna_id',
        'dokter_id',
        'pesan',
        'pengirim',
        'waktu_terkirim',
    ];

    protected $dates = ['waktu_terkirim'];

    public function user()
    {
        return $this->belongsTo(User::class, 'pengguna_id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function catatanMedis()
    {
        return $this->hasOne(Catatan_Medis::class);
    }
}
