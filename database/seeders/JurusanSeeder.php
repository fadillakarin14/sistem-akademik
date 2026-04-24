<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusans = [
            ['nama_jurusan' => 'Teknik Informatika', 'akreditasi' => 'A'],
            ['nama_jurusan' => 'Sistem Informasi', 'akreditasi' => 'B'],
            ['nama_jurusan' => 'Teknik Elektro', 'akreditasi' => 'A'],
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
