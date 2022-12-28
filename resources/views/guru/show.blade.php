@extends('layout')


@section('content')
<!-- Page Heading -->
<div class="text-center">
    <h1 class="h1 text-gray-900 mt-4 mb-4">Master Data Guru</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">    
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <form action="/getPresensi" method="POST">
            @csrf
            <select name="jadwal_id" id="jadwal_id" class="form-control form-control-user" placeholder="Kelas">
                @foreach($jadwal as $item) 
                <option value="{{ $item->id }}">{{ $item->mapel->mapel }} - {{ $item->kelas->nama }} - {{$item->Hari}} </option>
                @endforeach
            </select>
            <select name="minggu_ke" id="minggu_ke">
                @for($i = 1; $i <=14; $i++)
                <option value="{{$i}}"> minggu ke {{$i}} </option>
                @endfor
            </select>
            <button type="submit" class="btn btn-sm btn-primary "> cek </button>
        </form>
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Status</th>
                        <th><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody id="table-body">
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
                            <td>
                                <a href="/guru/edit/{{$item->id}}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i></a>
                                <a href="/guru/hapus/{{$item->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                    @if($cetak[0] != '' && $cetak[1]!='')
                        <a href="/cetak-presensi/{{$cetak[0]}}/{{$cetak[1]}}" type="submit" class="btn btn-sm btn-primary float-right"> <i class="fa fa-plus"></i> Cetak Data</a>
                     @endif
                    
                </table>
            </div>
    </div>
</div>
{{-- <script>
    function getPresensi() {

        var jadwal_id = document.getElementById('jadwal_id').value;
        var minggu_ke = document.getElementById('minggu_ke').value;

        fetch(`/api/fiter-absen/${jadwal_id}/${minggu_ke}`)
        .then(response => {
            console.log(response.json());
            
        })
        .catch(error => {
            console.log(error)
        });

    }
</script> --}}
@endsection