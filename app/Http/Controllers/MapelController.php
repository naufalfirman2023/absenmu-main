<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $data = Mapel::all();
        return view('admin.mapel.mapel', compact('data'));
    }

    public function tambah()
    {
        return view('admin.mapel.mapel-tambah');
    }

    public function simpan(Request $request)
    {
        Mapel::create([
            'mapel' => $request->mapel
        ]);
        return redirect('/mapel');
    }

    public function edit($id)
    {
        $data = Mapel::find($id);
        return view('admin.mapel.mapel-edit', compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = Mapel::find($id);
        $data->update([
            'mapel'=> $request->mapel
        ]);

        return redirect('/mapel');
    }

    public function hapus($id)
    {
        $data = Mapel::find($id);
        $data->delete();
        return redirect('/mapel');
    }
}
