@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5>Edit Matakuliah</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('matakuliah.update', $matakuliah->id_matakuliah) }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label>Nama Matakuliah</label>
                        <input type="text" name="nama_matakuliah" class="form-control" value="{{ $matakuliah->nama_matakuliah }}" required>
                    </div>
                    <div class="mb-3">
                        <label>SKS</label>
                        <input type="number" name="sks" class="form-control" value="{{ $matakuliah->sks }}" min="1" max="6" required>
                    </div>
                    <div class="mb-3">
                        <label>Jurusan</label>
                        <select name="id_jurusan" class="form-control" required>
                            <option value="">-- Pilih Jurusan --</option>
                            @foreach($jurusans as $jurusan)
                            <option value="{{ $jurusan->id_jurusan }}" {{ $matakuliah->id_jurusan == $jurusan->id_jurusan ? 'selected' : '' }}>
                                {{ $jurusan->nama_jurusan }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection