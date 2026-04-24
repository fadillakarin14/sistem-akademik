@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Data Jurusan</h2>
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan</a>
</div>

<form method="GET" action="{{ route('jurusan.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari jurusan..." value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
    </div>
</form>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Akreditasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jurusans as $index => $jurusan)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $jurusan->nama_jurusan }}</td>
            <td>{{ $jurusan->akreditasi }}</td>
            <td>
                <a href="{{ route('jurusan.edit', $jurusan->id_jurusan) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('jurusan.destroy', $jurusan->id_jurusan) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3">
    {{ $jurusans->links() }}
</div>
@endsection