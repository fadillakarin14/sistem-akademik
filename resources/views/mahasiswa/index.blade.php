@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Data Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
</div>
<form method="GET" action="{{ route('mahasiswa.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari nama/NIM..." value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
    </div>
</form>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $index => $mahasiswa)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->jurusan->nama_jurusan ?? '-' }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id_mahasiswa) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id_mahasiswa) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table><div class="mt-3">
    {{ $mahasiswas->links() }}
</div>

@endsection