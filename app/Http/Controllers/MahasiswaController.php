<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function tampil() {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.tampil', compact('mahasiswa'));
    }

    function tambah() {
        return view('mahasiswa.tambah');
    }

    function submit(Request $request) {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->domisili= $request->domisili;
        $mahasiswa->status = $request->status;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.tampil');
    }

    function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->domisili = $request->domisili;
        $mahasiswa->status = $request->status;
        $mahasiswa->update();

        return redirect()->route('mahasiswa.tampil');
    }

    function delete($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.tampil');
    }
}
