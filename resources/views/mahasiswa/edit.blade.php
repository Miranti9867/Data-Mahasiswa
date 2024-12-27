@extends('layout')

@section('konten')

<h4>Edit Mahasiswa</h4>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control mb-2">
    <label>NIM</label>
    <input type="number" name="nim" value="{{ $mahasiswa->nim }}" class="form-control mb-2">
    <label>Jurusan</label>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control mb-2">
    <label>Angkatan</label>
    <input type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}" class="form-control mb-2">
    <label>Domisili Kampus</label>
    <input type="text" name="domisili" value="{{ $mahasiswa->domisili }}" class="form-control mb-2">
    <label>Status</label>
    <input type="text" name="status" value="{{ $mahasiswa->status }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection