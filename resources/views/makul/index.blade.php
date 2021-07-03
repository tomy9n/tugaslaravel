@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Data Mata Kuliah
                   <a href="{{ route ('tambah.makul') }}" class="btn btn-md btn-primary float-right">Tambah Data</a></h3>
                </div>
                <div class="card-body">

                   <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                        <th>No</th>
                        <th>Kode Makul</th>
                        <th>Nama Makul</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                        </tr>
                        @foreach($makul as $mkl)
                        <tr>
                        <td>{{$mkl->id}}</td>
                        <td>{{$mkl->kd_makul}}</td>
                        <td>{{$mkl->nama_makul}}</td>
                        <td>{{$mkl->sks}}</td>
                        <td>
                            <a href="{{ route('edit.makul', $mkl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('hapus.makul', $mkl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection