<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\JadwalMapel;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        $data = JadwalMapel::all();
        return view('admin.jadwal.jadwal', compact('data', 'mapel', 'guru', 'kelas'));
    }

    public function tambah()
    {
        $guru = Guru::all();
        $mapel = Mapel::all();
        $kelas = Kelas::all();

        return view('admin.jadwal.jadwal-tambah', compact('guru', 'mapel', 'kelas'));
    }

    public function simpan(Request $request)
    {
        JadwalMapel::create([
            'mapel_id'=>$request->mapel_id,
            'guru_id'=>$request->guru_id,
            'Hari'=>$request->Hari,
            'jam'=>$request->jam,
            'kelas_id'=>$request->kelas_id
        ]);
        
        return redirect('jadwal');
    }

    public function edit($id)
    {
        $data = JadwalMapel::find($id);
        $guru = Guru::all();
        $mapel = Mapel::all();
        $kelas = Kelas::all();
        return view('admin.jadwal.jadwal-edit', compact('data', 'guru', 'mapel', 'kelas'));
    }
    
    public function update(Request $request,$id)
    {
        $data = JadwalMapel::find($id);
        $data->update([
            'mapel_id'=>$request->mapel_id,
            'guru_id'=>$request->guru_id,
            'Hari'=>$request->Hari,
            'jam'=>$request->jam,
            'kelas_id'=>$request->kelas_id
        ]);

        return redirect('/jadwal');
    }

    public function hapus($id)
    {
        $data = JadwalMapel::find($id);
        $data->delete();

        return redirect('/jadwal');
    }
}
