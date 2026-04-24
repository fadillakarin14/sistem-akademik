@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Dashboard Sistem Akademik</h2>
        <p>Selamat datang, {{ Auth::user()->name }}!</p>
    </div>
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body">
                <h5>Jurusan</h5>
                <a href="{{ route('jurusan.index') }}" class="btn btn-light btn-sm">Kelola Jurusan</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white mb-3">
            <div class="card-body">
                <h5>Mahasiswa</h5>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-light btn-sm">Kelola Mahasiswa</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-white mb-3">
            <div class="card-body">
                <h5>Matakuliah</h5>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-light btn-sm">Kelola Matakuliah</a>
            </div>
        </div>
    </div>
</div>
@endsection