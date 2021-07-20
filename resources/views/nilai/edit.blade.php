@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Edit Mahasiswa</h3></div>

                <div class="card-body">
                    <form action="{{ route('update.nilai',$nilai->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected>--Pilih Mahasiswa--</option>
                                        @foreach ($mahasiswa as $mhs)
                                            <option value="{{$mhs->id}}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }}>{{$mhs->user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nama Mata Kuliah</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                        @foreach ($makul as $mkl)
                                            <option value="{{$mkl->id}}" {{ $nilai->makul_id == $mkl->id ? 'selected' : '' }}>{{$mkl->nama_makul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" value="{{ is_null($nilai) ? '' : $nilai->nilai }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>   
                                    <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
