@extends('layout')

@section('konten')

<h4>Tambah Mahasiswa</h4>

<form action="{{ route('mahasiswa.submit') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>NIM</label>
    <input type="number" name="nim" class="form-control mb-2">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control mb-2">
    <label>Angkatan</label>
    <input type="text" name="angkatan" class="form-control mb-2">
    <label>Domisili Kampus</label>
    <input type="text" name="domisili" class="form-control mb-2">
    <label>Status</label>
    <input type="text" name="status" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection