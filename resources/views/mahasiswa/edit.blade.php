@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5>Edit Mahasiswa</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id_mahasiswa) }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Jurusan</label>
                        <select name="id_jurusan" class="form-control" required>
                            <option value="">-- Pilih Jurusan --</option>
                            @foreach($jurusans as $jurusan)
                            <option value="{{ $jurusan->id_jurusan }}" {{ $mahasiswa->id_jurusan == $jurusan->id_jurusan ? 'selected' : '' }}>
                                {{ $jurusan->nama_jurusan }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection