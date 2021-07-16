<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;
use App\User;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); // select * from mahasiswa
        return view ('mahasiswa.index', compact('mahasiswa') );
    }

    public function tambah()
    {
        return view ('mahasiswa.tambah');
    }

    public function create(Request $request)
     {
    //   $mahasiswa = new Mahasiswa;
    //   $mahasiswa -> npm = $request->npm;
    //   $mahasiswa -> nama_mahasiswa = $request->nama_mahasiswa;
    //   $mahasiswa -> tgl_lahir = $request->tgl_lahir;
    //   $mahasiswa -> tempat_lahir = $request->tempat_lahir;
    //   $mahasiswa -> jenis_kelamin = $request->jenis_kelamin;
    //   $mahasiswa -> hp = $request->hp;
    //   $mahasiswa -> alamat = $request->alamat;

    //   $mahasiswa->save();

    //   return redirect('mahasiswa');
    // }
      Mahasiswa::create($request->all());
      toast('Data Mahasiswa Berhasil Disimpan','success');
      return redirect('mahasiswa');
     }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Mahasiswa Berhasil Di Edit','success');
        return redirect('mahasiswa');
    }

    public function destroy($id)
    {
         $mahasiswa = Mahasiswa::find($id);
         $mahasiswa ->delete();
         toast('Data Mahasiswa Telah Di Hapus','info');
         return redirect('mahasiswa');
    }

    }   
?>