<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        toast('Data Berhasil Disimpan', 'success');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil Diedit', 'success');
        return redirect()->route('mahasiswa');
    }

    public function hapus($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Data Berhasil Dihapus', 'success');
        return redirect()->route('mahasiswa');
    }
}
