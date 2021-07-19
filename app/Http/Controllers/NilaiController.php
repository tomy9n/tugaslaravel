<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(){
        $nilai = Nilai::with(['mahasiswa','makul'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create(){
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.create', compact('mahasiswa','makul'));
    }

    public function store(Request $request){
        Nilai::create($request->all());
        toast('Data Berhasil Disimpan', 'success');
        return redirect()->route('nilai');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit',compact('nilai','mahasiswa','makul'));
    }

    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diedit', 'success');
        return redirect()->route('nilai');
    }

    public function hapus($id){
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil Dihapus', 'success');
        return redirect()->route('nilai');
    }
}
