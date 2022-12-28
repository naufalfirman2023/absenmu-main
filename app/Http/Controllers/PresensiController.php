<?php

namespace App\Http\Controllers;


use App\Models\CodePresensi;
use App\Models\JadwalMapel;
use App\Models\Presensi;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index()
    {
        $guru_id = Auth::user()->guru_id;
        $data = JadwalMapel::where('guru_id', $guru_id)->get();

        return view('guru.generate', compact('data'));
    }

    public function simpan(Request $request)
    {
        CodePresensi::create([
            'code_presensi' => $request->presensi,
            'jadwal_id' => $request->jadwal_id,
            'waktu_awal' => $request->waktu_awal,
            'waktu_akhir' => $request->waktu_akhir,
            'minggu_ke' => $request->minggu_ke
        ]);

        return redirect('/dashboard');
    }

    public function presensiSiswa()
    {
        return view('siswa.scan-presensi');
    }

    public function cekPresensi(Request $request)
    {
        $id_kelas_siswa = auth()->user()->siswa->kelas_id;
        $codePresensi = $request->presensi;

        $dataPresensi = CodePresensi::where('code_presensi', $codePresensi)->first();

        if ($dataPresensi->jadwal->kelas_id !== $id_kelas_siswa) return back()->with('error', 'anda bukan kelas ini');

        if (Carbon::now() < $dataPresensi->waktu_awal || Carbon::now() > $dataPresensi->waktu_akhir) return back()->with('error', 'Bukan waktu untuk presensi');

        Presensi::create([
            'siswa_id' => auth()->user()->siswa_id,
            'jadwal_id' => $dataPresensi->jadwal_id,
            'status' => 'hadir',
            'minggu_ke' => $dataPresensi->minggu_ke
        ]);

        return redirect('/dashboard');
    }

    function showAbsen() {
        $jadwal = JadwalMapel::where('guru_id', auth()->user()->guru_id)->get();
        $dataPresensi = [];
        $dataSiswa = [];
        $cetak = ['',''];
        return view('guru.show', compact('jadwal', 'dataPresensi', 'dataSiswa', 'cetak'));
    }
    public function filterAbsensi(Request $request)
    {
        $jadwal = JadwalMapel::where('guru_id', auth()->user()->guru_id)->get();
        $dataPresensi = Presensi::where([
            ['minggu_ke', '=', $request->minggu_ke],
            ['jadwal_id', '=', $request->jadwal_id]
        ])->get();
        $dataJadwal = JadwalMapel::find($request->jadwal_id);
        $dataSiswa = Siswa::where('kelas_id', $dataJadwal->kelas_id)->get();
        $cetak = [$request->minggu_ke, $request->jadwal_id];

        // dd($dataPresensi, $dataSiswa);
        return view('guru.show', compact('jadwal', 'dataPresensi', 'dataSiswa', 'cetak'));
    }
    
    public function cetakPresensi($minggu_ke ,$jadwal_id)
    {
        $dataPresensi = Presensi::where([
            ['minggu_ke', '=', $minggu_ke],
            ['jadwal_id', '=', $jadwal_id]
        ])->get();
        $dataJadwal = JadwalMapel::find($jadwal_id);
        $dataSiswa = Siswa::where('kelas_id', $dataJadwal->kelas_id)->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('guru.cetak', ['dataPresensi'=>$dataPresensi, 'dataSiswa'=>$dataSiswa]);
        return $pdf->download('guru.cetak.pdf');
        
    }
}
