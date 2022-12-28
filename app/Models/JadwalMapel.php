<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMapel extends Model
{
    use HasFactory;
    protected $guarded=[];
    function kelas () {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    function mapel (){
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    function guru (){
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
