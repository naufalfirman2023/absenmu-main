<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak | Absensi Siswa</title>
    <style>
      .TH th {
          background-color: #04AA6D;
          color: white;
          text-align: center;

      }

      .TH td {
        padding-left: 15px;
      }

      .TH tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body onload="window.print()">
  <table width="100%" style="border-collapse: collapse">
    <tbody>
      <tr>
        <td align="center" valign="bottom" style="border-bottom:1px solid #000000;">
          <img src="https://sia.uty.ac.id//image/logo.png" width="65" height="65">
        </td>
        <td colspan="3" valign="bottom" style="border-bottom:1px solid #000000;">
          <span class="univ"><strong>UNIVERSITAS TEKNOLOGI YOGYAKARTA</strong></span><br>
          <span class="fakultas"><strong>SAINS & TEKNOLOGI</strong></span><br>
          <span class="alamat">Jl. Glagah Sari No. 63 - Yogyakarta. D.I. 55164<br>
          <span> (0274) 373955, Fax. (0274) 623306, E-Mail: info@uty.ac.id, Homepage: www.uty.ac.id</span>
        </td>
      </tr>
      <tr>
        <td width="5%"><span class="label">Mata Pelajaran</span></td>
        <td width="10%"><span class="label">:&nbsp;<strong>{{$dataPresensi[0]->jadwal->mapel->mapel}}</strong></span></td>
        <td width="5%"><span class="label">Tahun Akademik </span></td>
        <td width="10%"><span class="label">:&nbsp;<strong>Genap, 2021/2022</strong> </span></td>
        <!-- <td width="12%"><span class="label">Minggu</span></td>
        <td width="20%"><span class="label">:&nbsp;<strong>2</strong> </span></td> -->
      </tr>
    </tbody>
  </table>
  
  <div id="table-matkul">
    <table width="100%" class="TH">
      <tbody >
        <tr >
          <th>Nama Siswa</th>
          <th>Keterangan</th>
        </tr>
        @foreach($dataSiswa as $item)
            <tr>
                <td> {{$item->nama}} </td>
                <td>
                  @php
                  $tes = $dataPresensi->where('siswa_id', $item->id)->first();
                  if($tes) {
                      echo ucfirst(trans($tes->status));
                  }else {
                      echo 'Alpha';
                  }
               @endphp
                </td>
                </tr>

            @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>