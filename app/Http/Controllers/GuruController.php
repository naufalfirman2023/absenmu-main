<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('admin.guru.guru', compact('guru', 'kelas'));
    }

    public function tambah()
    {
        $kelas = Kelas::all();
        return view('admin.guru.guru-tambah', compact('kelas'));
    }

    public function simpan(Request $request)
    {
        $guru = Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'kelas_id' => $request->kelas_id
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'guru',
            'guru_id' => $guru->id
        ]);

        return redirect('/guru');
    }

    public function edit($id)
    {
        $data = Guru::find($id);
        $kelas = Kelas::all();
        return view('admin.guru.guru-edit', compact('kelas', 'data'));
    }

    public function update(Request $request, $id)
    {
        $data = Guru::find($id);
        $data->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect('/guru');
    }

    public function hapus($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect('/guru');
    }
}
