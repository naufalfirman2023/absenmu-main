@extends('layout')


@section('content')
<!-- Page Heading -->
<div class="text-center">
    <h1 class="h1 text-gray-900 mt-4 mb-4">Master Data User</h1>
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
                    <h5 class="modal-title" id="tambahLabel">Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h1 text-gray-900 mt-4 mb-4">Tambah Data User</h1>
                        </div>
                        <form class="user" action="/user/simpan" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" placeholder="Username" name="username">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb3 mb-sm-0">

                                    <select name="role" class="form-control form-control-user" onchange="showUser(this.value)">
                                        <option value="admin">admin</option>
                                        <option value="guru">guru</option>
                                        <option value="siswa">siswa</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select name="user_id" id="select-user" class="form-control" >

                                    </select>
                                </div>
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
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th><i class="fa fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- {% for matkul in data %} -->
                    @foreach($data as $item)
                    <tr>
                        @if ( $item->role == 'guru')
                        <td> {{ $item->guru->nama }} </td>
                        @elseif ($item->role == 'siswa')
                        <td> {{ $item->siswa->nama }} </td>
                        @else
                        <td>Admin</td>   
                        @endif
                        <td>{{$item->username}} </td>
                        <td>{{$item->role}} </td>
                        <td>
                            <button class="btn btn-sm btn-info" data-toggle="modal"data-target="#exampleModal{{$item->id}}"> 
                                <i class="fa fa-edit"></i>
                            </button>
                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h1 text-gray-900">Edit Data User</h1>
                                                </div>
                                                <form class="user" action="/user/update/{{$item->id}}" method="post">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <input type="text" class="form-control form-control-user" placeholder="Username" name="username" value="{{$item->username}}">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control form-control-user" placeholder="Password Baru" name="password" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <select name="role" class="form-control form-control-user">
                                                            <option value="admin">admin</option>
                                                            <option value="guru">guru</option>
                                                            <option value="siswa">siswa</option>
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
                            
                            <button href="/dash" class="btn btn-sm btn-danger" data-toggle="modal"data-target="#hapusmodallabel{{$item->id}}">
                                <i class="fa fa-trash" ></i>
                            </button>
                            <div class="modal fade" id="hapusmodallabel{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusmodallabelLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusmodallabelLabel">Hapus Data User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda Yakin Ingin Menghapus Data Ini?
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/user/hapus/{{$item->id}}" method="post">
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


<script>
    function showUser(value) {
        
        fetch(`/api/show-user/${value}`)
        .then((response) => {
            return response.json();
            
        })
        .then ((data)=> {
            console.log(data)
            var selectUser =  document.getElementById('select-user')
            selectUser.innerHTML = ""

            data.forEach(item => {
                console.log(item['id'])
                let option = document.createElement('option')
                option.value = item['id']
                option.text = item['nama']
                selectUser.append(option)
            });

        })
        .catch(error => {
            console.log(error)
        });
    }
</script>
@endsection