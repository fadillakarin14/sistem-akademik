<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $mahasiswas = [
            ['nim' => '2024001', 'nama' => 'Budi Santoso', 'id_jurusan' => 1],
            ['nim' => '2024002', 'nama' => 'Siti Rahayu', 'id_jurusan' => 2],
            ['nim' => '2024003', 'nama' => 'Ahmad Fauzi', 'id_jurusan' => 3],
            ['nim' => '2024004', 'nama' => 'Dewi Lestari', 'id_jurusan' => 1],
            ['nim' => '2024005', 'nama' => 'Rizky Pratama', 'id_jurusan' => 2],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}
