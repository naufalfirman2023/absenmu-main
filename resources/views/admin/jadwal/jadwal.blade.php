@extends('layout')


@section('content')
    <!-- Page Heading -->
<div class="text-center">
    <h1 class="h1 text-gray-900 mt-4 mb-4">Master Data Jadwal</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">    
    <div class="card-header py-3">
        <button class="btn btn-sm btn-primary float-right" data-toggle="modal"data-target="#tambah"><i class="fa fa-plus"></i> Tambah Data </button>
    </div>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h1 text-gray-900 mt-4 mb-4">Tambah Data Jadwal</h1>
                    </div>
                    <form class="user" action="/jadwal/simpan" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select name="mapel_id" class="form-control form-control-user">
                                    @foreach($mapel as $item)
                                    <option value="{{$item->id}}"> {{$item->mapel}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select name="guru_id" class="form-control form-control-user">
                                    @foreach($guru as $item)
                                    <option value="{{$item->id}}"> {{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select name="Hari" class="form-control form-control-user">
                                    <option value="Senin">Senin</option>
                                    <option value="Selesa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                </select>
                            </div>
                                <div class="col-sm-6">
                                    <input type="time" class="form-control form-control-user" placeholder="Waktu" name="jam">
                                </div>
                        </div>
                        <div class="form-group">
                            <select name="kelas_id" class="form-control form-control-user">
                                @foreach($kelas as $item) 
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                            
                        <div class="text-center">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="">
                    <thead>
                        <tr>
                        <<th>Mapel</th>
                        <th>Guru</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Kelas</th>
                        <th><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {% for matkul in data %} -->
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->mapel->mapel }}</td>
                            <td>{{ $item->guru->nama }}</td>
                            <td>{{$item->Hari}}</td>
                            <td>{{$item->jam}}</td>
                            <td>{{ $item->kelas->nama }}</td>
                            <td>
                            <button class="btn btn-sm btn-info" data-toggle="modal"data-target="#exampleModal{{$item->id}}"> 
                                    <i class="fa fa-edit"></i>
                                </button>
                                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Jadwal</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-5">
                                                    <div class="text-center">
                                                    <h1 class="h1 text-gray-900 mt-4 mb-4">Edit Data Jadwal</h1>
                                                    </div>
                                                    <form class="user" action="/jadwal/update/{{$item->id}}" method="post">
                                                        @csrf
                                                        <div class="form-group row">
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <select name="mapel_id" class="form-control form-control-user" >
                                                                    @foreach($mapel as $itemMapel)
                                                                    <option value="{{$itemMapel->id}}" {{ ($itemMapel->id == $item->mapel_id) ? 'selected' : '' }} > {{$itemMapel->mapel}} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select name="guru_id" class="form-control form-control-user">
                                                                    @foreach($guru as $itemGuru)
                                                                    <option value="{{$itemGuru->id}}" {{ ($itemGuru->id == $item->guru_id) ? 'selected' : '' }}> {{$itemGuru->nama}} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                <select name="Hari" class="form-control form-control-user">
                                                                    <option value="Senin">Senin</option>
                                                                    <option value="Selesa">Selasa</option>
                                                                    <option value="Rabu">Rabu</option>
                                                                    <option value="Kamis">Kamis</option>
                                                                    <option value="Jumat">Jumat</option>
                                                                </select>
                                                            </div>
                                                                <div class="col-sm-6">
                                                                    <input type="time" class="form-control form-control-user" placeholder="Waktu" name="jam" value="{{ $item->jam }}">
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="kelas_id" class="form-control form-control-user">
                                                                @foreach($kelas as $itemKelas) 
                                                                <option value="{{ $itemKelas->id }}" {{ ($itemKelas->id == $item->kelas_id) ? 'selected' : ''  }}>{{ $itemKelas->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Save Data</button>
                                            </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <button href="#" class="btn btn-sm btn-danger" data-toggle="modal"data-target="#hapusmodallabel{{$item->id}}">
                                    <i class="fa fa-trash" ></i>
                                </button>
                                <div class="modal fade" id="hapusmodallabel{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusmodallabelLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusmodallabelLabel">Hapus Data Jadwal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Ingin Menghapus Data Ini?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/jadwal/hapus/{{$item->id}}" method="post">
                                                @csrf
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Hapus Data</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        <!-- {% endfor %} -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection