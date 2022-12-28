@extends('layout')


@section('content')
    <!-- Page Heading -->
<div class="text-center">
    <h1 class="h1 text-gray-900 mt-4 mb-4">Master Data Kelas</h1>
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
                <h5 class="modal-title" id="tambahLabel">Tambah Data Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h1 text-gray-900 mt-4 mb-4">Tambah Data Kelas</h1>
                    </div>
                    <form class="user" action="/kelas/simpan" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama">
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
                        <th>Nama Kelas</th>
                        <th><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {% for matkul in data %} -->
                        @foreach($data as $item)
                        <tr>
                            <td> {{$item->nama}} </td>
                            <td>
                            <button class="btn btn-sm btn-info" data-toggle="modal"data-target="#exampleModal{{$item->id}}"> 
                                    <i class="fa fa-edit"></i>
                                </button>
                                    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-5">
                                                    <div class="text-center">
                                                    <h1 class="h1 text-gray-900 mt-4 mb-4">Edit Data Kelas</h1>
                                                    </div>
                                                    <form class="user" action="/kelas/update/{{$item->id}}" method="post">
                                                        @csrf
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama" value="{{$item->nama}}">
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
                                <button class="btn btn-sm btn-danger" data-toggle="modal"data-target="#hapusmodallabel{{$item->id}}">
                                    <i class="fa fa-trash" ></i>
                                </button>
                                <div class="modal fade" id="hapusmodallabel{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusmodallabelLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusmodallabelLabel">Hapus Data Kelas</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Ingin Menghapus Data Ini?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/kelas/hapus/{{$item->id}}" method="post">
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