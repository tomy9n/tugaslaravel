@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3>Data Nilai
                   <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-primary float-right">Tambah Data</a></h3> 
                </div>
                <div class="card-body">

                   <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                        </tr>
                        @php 
                            $no = 1;
                        @endphp
                        @foreach($nilai as $nl)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$nl->mahasiswa->npm}}</td>
                        <td>{{$nl->mahasiswa->user->name}}</td>
                        <td>{{$nl->makul->nama_makul}}</td>
                        <td>{{$nl->makul->sks}}</td>
                        <td>{{$nl->nilai}}</td>
                        <td>
                            <a href="{{ route('edit.nilai', $nl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('hapus.nilai', $nl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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