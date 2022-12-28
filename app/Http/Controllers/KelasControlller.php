<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class KelasControlller extends Controller
{
    public function index()
    {
        $data = Kelas::all();
        return view('admin.kelas.kelas', compact('data'));
    }

    public function tambah()
    {
        return view('admin.kelas.kelas-tambah');
    }

    public function simpan(Request $request)
    {
        Kelas::create([
            'nama'=> $request->nama
        ]);

        return redirect('/kelas');
    }

    public function edit($id)
    {
        $data = Kelas::find($id);
        return view('admin.kelas.kelas-edit', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $data = Kelas::find($id);
        $data->update([
            'nama'=> $request->nama
        ]);

        return redirect('/kelas');
    }

    public function hapus($id)
    {
        $data = Kelas::find($id);
        $data->delete();

        return redirect('/kelas');
    }
}
