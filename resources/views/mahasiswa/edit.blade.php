@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Edit Mahasiswa</h3></div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa',$mahasiswa->id) }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled selected>--Pilih User--</option>
                                        @foreach ($user as $u)
                                            <option value="{{$u->id}}" {{ $mahasiswa->user_id == $u->id ? 'selected' : '' }}>{{$u->name}}</option>
                                        @endforeach
                                    </select><br>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}"><br>
                                </div>
                            </div>
                        
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                        <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                        <option value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nomor Telepon</label>
                                    <input type="number" name="telepon" class="form-control" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon }}"><br>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" style="resize:none" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->alamat }}">      
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>   
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
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
