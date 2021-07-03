<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{
    public function index(){
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create(){
        return view('makul.create');
    }

    public function store(Request $request){
        Makul::create($request->all());
        toast('Data Berhasil Disimpan', 'success');
        return redirect()->route('makul');
    }

    public function edit($id){
        $makul = Makul::find($id);
        return view('makul.edit',compact('makul'));
    }

    public function update(Request $request, $id){
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Data Berhasil Diedit', 'success');
        return redirect()->route('makul');
    }

    public function hapus($id){
        $makul = Makul::find($id);
        $makul->delete();
        toast('Data Berhasil Dihapus', 'success');
        return redirect()->route('makul');
    }
}
