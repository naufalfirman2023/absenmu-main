<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodePresensi extends Model
{
    use HasFactory;
    protected $guarded=[];

    function jadwal () {
        return $this->belongsTo(JadwalMapel::class, 'jadwal_id');
    }
}
