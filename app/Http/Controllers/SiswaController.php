<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    function index(){


        $data['siswa'] = Siswa::all();

        return view("siswa_tampil",$data);
    }
    function create(){

        return view("siswa_create");
    }
    function store(Request $request){

        $namafoto = $request->foto->getClientOriginalName();

        $upload = $request->foto->move('assets/gambar/',$namafoto);            

        $masuk['nama_siswa'] = $request->nama;
        $masuk['alamat_siswa'] = $request->alamat;
        $masuk['jenis_kelamin'] = $request->jk_siswa;
        $masuk['foto_siswa'] = $namafoto;


        

        Siswa::create($masuk);

        return redirect("siswa");


    }
    function destroy(Request $request, $id_siswa){
        Siswa::find($id_siswa)->delete();
        return redirect('siswa');

    }

    function edit($id_siswa){

        $data['siswa'] = Siswa::find($id_siswa);

        return view('siswa_edit',$data);
    }

    function update(Request $request, $id_siswa){

        if ($request->foto) {

        $namafoto = $request->foto->getClientOriginalName();

        $upload = $request->foto->move('assets/gambar/',$namafoto);
        $masuk['foto_siswa'] = $namafoto;


        }


        $masuk['nama_siswa'] = $request->nama;
        $masuk['alamat_siswa'] = $request->alamat;
        $masuk['jenis_kelamin'] = $request->jk_siswa;
        

        Siswa::find($id_siswa)->update($masuk);

        return redirect('siswa');

    }
}
