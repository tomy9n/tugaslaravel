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
                                    <input type="number" name="npm" class="form-control" placeholder="Tambahkan NPM" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}"><br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Tambahkan Nama Mahasiswa" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa }}"><br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}"><br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Pilih Tanggal Lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}"><br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->jenis_kelamin }}">
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select><br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nomor Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Nomor Telepon" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon }}"><br>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->alamat }}"><br>
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
