@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Tambah Matakuliah</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('matakuliah.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Matakuliah</label>
                        <input type="text" name="nama_matakuliah" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>SKS</label>
                        <input type="number" name="sks" class="form-control" min="1" max="6" required>
                    </div>
                    <div class="mb-3">
                        <label>Jurusan</label>
                        <select name="id_jurusan" class="form-control" required>
                            <option value="">-- Pilih Jurusan --</option>
                            @foreach($jurusans as $jurusan)
                            <option value="{{ $jurusan->id_jurusan }}">{{ $jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection