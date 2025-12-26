<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan_Medis extends Model
{
    protected $table = 'catatan_medis';

    protected $fillable = [
        'chat_id',
        'diagnosa_ringan',
        'saran_pengobatan',
        'tanggal_catatan',
    ];

    protected $dates = ['tanggal_catatan'];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
