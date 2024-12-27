@extends('layout')

@section('konten')

<div class="d-flex mt-5">
    <h5>Data Mahasiswa</h5>
    <div class="ms-auto">
        <a href="{{ Route('mahasiswa.tambah') }}" class="btn btn-success">Tambah Mahasiswa</a>
    </div>
</div>

<table class="table mt-3">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Angkatan</th>
        <th>Domisili Kampus</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $no=>$data)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nim }}</td>
            <td>{{ $data->jurusan }}</td>
            <td>{{ $data->angkatan }}</td>
            <td>{{ $data->domisili }}</td>
            <td>{{ $data->status }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('mahasiswa.delete', $data->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-danger mt-1">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection