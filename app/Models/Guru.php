<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $guarded=[];
    function kelas (){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
