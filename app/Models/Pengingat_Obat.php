<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengingat_Obat extends Model
{
    protected $table = 'pengingat_obat';

    protected $fillable = [
        'pengguna_id',
        'waktu_minum',
        'status_pengingat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'pengguna_id');
    }
}
