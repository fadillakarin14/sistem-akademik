<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $matakuliahs = [
            ['nama_matakuliah' => 'Pemrograman Web', 'sks' => 3, 'id_jurusan' => 1],
            ['nama_matakuliah' => 'Basis Data', 'sks' => 3, 'id_jurusan' => 1],
            ['nama_matakuliah' => 'Sistem Informasi Manajemen', 'sks' => 3, 'id_jurusan' => 2],
            ['nama_matakuliah' => 'Analisis Sistem', 'sks' => 2, 'id_jurusan' => 2],
            ['nama_matakuliah' => 'Rangkaian Listrik', 'sks' => 3, 'id_jurusan' => 3],
            ['nama_matakuliah' => 'Elektronika Dasar', 'sks' => 3, 'id_jurusan' => 3],
        ];

        foreach ($matakuliahs as $matakuliah) {
            Matakuliah::create($matakuliah);
        }
    }
}
