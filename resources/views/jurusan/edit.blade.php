@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h5>Edit Jurusan</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('jurusan.update', $jurusan->id_jurusan) }}">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label>Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Akreditasi</label>
                        <select name="akreditasi" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="A" {{ $jurusan->akreditasi == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $jurusan->akreditasi == 'B' ? 'selected' : '' }}>B</option>
                            <option value="C" {{ $jurusan->akreditasi == 'C' ? 'selected' : '' }}>C</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection