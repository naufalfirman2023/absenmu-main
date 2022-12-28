<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class   SiswaController extends Controller
{
    public function index()
    {
        $data =  Siswa::all();
        $kelas = Kelas::all();
        // dd($data);
        return view('admin.siswa.siswa', compact('data', 'kelas'));
    }

    public function tambah()
    {
        $kelas = Kelas::all();
        return view('admin.siswa.siswa-tambah', compact('kelas'));
    }

    public function simpan(Request $request)
    {

        $siswa = Siswa::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'kelas_id' => $request->kelas_id
        ]);
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
            'siswa_id' => $siswa->id
        ]);

        return redirect('/siswa');
    }

    public function edit($id)
    {
        $data = Siswa::find($id);
        $kelas = Kelas::all();
        return view('admin.siswa.siswa-edit', compact('data', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::find($id);
        $data->update([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'kelas_id' => $request->kelas_id
        ]);
        return redirect('/siswa');
    }
    
    public function hapus($id)
    {

        $data = Siswa::find($id);
        $data->delete();

        return redirect('/siswa');
    }
}
