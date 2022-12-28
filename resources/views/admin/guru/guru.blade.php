@extends('layout')


@section('content')
<!-- Page Heading -->
<div class="text-center">
    <h1 class="h1 text-gray-900 mt-4 mb-4">Master Data Guru</h1>
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
                    <h5 class="modal-title" id="tambahLabel">Tambah Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h1 text-gray-900 mt-4 mb-4">Tambah Data Guru</h1>
                        </div>
                        <form class="user" action="/guru/simpan" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user" placeholder="NIP" name="nip">
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="kelas_id" class="form-control form-control-user" placeholder="Kelas">
                                    @foreach($kelas as $itemkelas) 
                                    <option value="{{ $itemkelas->id }}">{{ $itemkelas->nama }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="username" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" placeholder="password" name="password">
                                </div>
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
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Kelas</th>
                        <th><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- {% for matkul in data %} -->
                    @foreach($guru as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->kelas->nama }}</td>
                        <td>
                            <button href="#" class="btn btn-sm btn-info"> 
                                <i class="fa fa-edit"data-toggle="modal"data-target="#exampleModal{{ $item->id }}"></i>
                            </button>
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h1 text-gray-900 mt-4 mb-4">Edit Data Guru</h1>
                                                </div>
                                                <form class="user" action="/guru/update/{{$item->id}}" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama" value="{{$item->nama}}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control form-control-user" placeholder="NIP" name="nip" value=" {{$item->nip}} ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="kelas_id" class="form-control form-control-user" placeholder="Kelas">
                                                            @foreach($kelas as $itemkelas) 
                                                            <option value="{{ $itemkelas->id }}" {{ ($itemkelas->id == $item->kelas_id) ? 'selected' : ''  }}>{{ $itemkelas->nama }}</option>
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
                            <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" data-toggle="modal"data-target="#hapusmodallabel{{$item->id}}"></i>
                            </button>
                            <div class="modal fade" id="hapusmodallabel{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusmodallabelLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusmodallabelLabel">Hapus Data Guru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Ingin Menghapus Data Ini?
                                        </div>
                                        <form action="/guru/hapus/{{$item->id}}" method="post">
                                            @csrf
                                            <div class="modal-footer">
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