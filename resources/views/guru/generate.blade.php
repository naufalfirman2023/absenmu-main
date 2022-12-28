@extends('layout')

@section('content')
    <!-- Page Heading -->
    <div class="text-center">
        <h1 class="h1 text-gray-900 mt-4 mb-4">Genrate Kode Presensi</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow col-md-11 ml-auto mr-auto " style="width: 100%;">    
        <table class="table table-bordere " id="dataTable" width="80%" cellspacing="0">
            <thead>
                <tr  style="text-align:center;">
                    <th>Kelas dan Mata Pelajaran</th>         
                    <th>Pertemuan</th>         
                    <th>Mulai</th>         
                    <th>Selesai</th>         
                </tr>
            </thead>
            <tbody>
                <form action="/simpan-code-presensi" method="POST">
                    @csrf
                    <tr>       
                        <td  style="width:500px; height:40px; border: 1px;">
                            <select name="jadwal_id" class="form-control">
                                @foreach($data as $item) 
                                <option value="{{ $item->id }}">{{ $item->mapel->mapel }} - {{ $item->kelas->nama }} - {{$item->Hari}} </option>
                                @endforeach
                            </select>
                    </td>
                    <td style="width:200px; height:40px; border: 1px;">
                        <select name="minggu_ke" class="form-control">
                            @for($i = 1; $i <=14; $i++)
                                <option value="{{$i}}"> minggu ke {{$i}} </option>
                            @endfor
                        </select>
                    </td>
                    <td style=" border: 1px;">         
                        <input type="datetime-local" name="waktu_awal" id="" style="width:100%; border:2px;" class="">
                    </td>
                    <td style=" border: 1px;">         
                        <input type="datetime-local" name="waktu_akhir" id="" style="width:100%; border:2px;" class="">
                    </td>
                </tr>
                <tr>
                    <span class="mt-4" style="text-align:center;">Kode</span>
                    <input type="text" style="width:80%; text-align:center;" class="ml-auto mr-auto" id="presensi" name="presensi">
                </tr>
                
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>
                        <div class="d-flex">
                            <button type="button" onclick="generate()" class="btn btn-primary  ml-auto mr-auto  mt-5 mb-4 mx-auto">Generate</button>
                        </div>
                    </th>
                    <th>
                        <div class="d-flex">
                            
                            <button type="submit" class="btn btn-primary  ml-auto mr-auto  mt-5 mb-4">Simpan</button>
                        </div>
                    </th>
                </tr>
            </tfoot>
        </form>
        </table>
    </div>
    
    <script>
        const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    
        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for ( let i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
    
            return result;
        }
    
        function generate() {
            document.getElementById("presensi").value = generateString(10);
        }
    
    </script>
@endsection