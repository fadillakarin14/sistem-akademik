@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Tambah Jurusan</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('jurusan.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Akreditasi</label>
                        <select name="akreditasi" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection