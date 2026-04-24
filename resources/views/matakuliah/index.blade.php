@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Data Matakuliah</h2>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Matakuliah</a>
</div>
<form method="GET" action="{{ route('matakuliah.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari matakuliah..." value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
    </div>
</form>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($matakuliahs as $index => $matakuliah)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $matakuliah->nama_matakuliah }}</td>
            <td>{{ $matakuliah->sks }}</td>
            <td>{{ $matakuliah->jurusan->nama_jurusan ?? '-' }}</td>
            <td>
                <a href="{{ route('matakuliah.edit', $matakuliah->id_matakuliah) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('matakuliah.destroy', $matakuliah->id_matakuliah) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    {{ $matakuliahs->links() }}
</div>
@endsection