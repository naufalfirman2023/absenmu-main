@extends('layout')


@section('content')
<!-- Page Heading -->
<div class="text-center">
    <h1 class="h1 text-gray-900 mt-4 mb-4">Input Kode Presensi</h1>
</div>
<!-- DataTales Example -->
<div class="card shadow col-md-6 ml-auto mr-auto " style="width: 100%;">    
    <div class="card-body" >
        <div class="table-responsive">
            <table class="table table-bordere " id="dataTable" width="100%" cellspacing="0">
                
                <tbody>
                    <!-- {% for matkul in data %} -->
                    <tr>
                        <form action="/cekPresensi" method="POST">
                            @csrf
                            <div class="form-group form-floating-label mb-5">
                                <input name="presensi" type="text" class="form-control input-border-"  required>
                                <label class="placeholder">Kode Presensi</label>
                            </div>  
                            @if( $msg = Session::get('error'))
                            <p>{{ $msg }}</p>
                            @endif
                        </tr>
                        <tr>
                            <div class="text-center mt-5" >
                                <button type="submit" class="btn btn-primary btn-user btn-sm " style="width: 150px;">Scan</button>
                            </div>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection