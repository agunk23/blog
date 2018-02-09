<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Lomba;

class LombaController extends Controller
{
    //
    function index(){
        return view('lomba.index');
    }
    function detail($id){
        return view('lomba.detail');
    }
    function add(){
        return view('lomba.add');
    }
    function create(Request $request){
        //dd($request);
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $tanggal = $request->tanggal_tutup;

        if($nama == null){
            return 'nama kosong, mohon diisi';
        }
        
        $lomba = new Lomba;
        $lomba->nama = $nama;
        $lomba->deskripsi = $deskripsi;
        $lomba->poster = $poster;
        $lomba->tanggal_tutup = $tanggal;
        $lomba->save();
        return redirect('lomba');

    }
        function edit($id){
            $lomba = \App\Lomba::find($id);
            return view('lomba.edit')->with('lomba', $lomba);
        
    }
    function update(Request $request,$id){
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $tanggal = $request->tanggal_tutup;

        if($nama == null){
            return 'nama kosong, mohon diisi';
        }
        
        $lomba = \App\lomba::find($id);
        $lomba->nama = $nama;
        $lomba->deskripsi = $deskripsi;
        $lomba->poster = $poster;
        $lomba->tanggal_tutup = $tanggal;
        $lomba->save();
        return redirect('lomba');

    
    }
    
    function delete($id){
        return view('lomba.delete');
    }
    function confirmDelete($id){
    }
}