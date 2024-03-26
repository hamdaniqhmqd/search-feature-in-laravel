<?php

namespace Database\Seeders;

use App\Models\Mahasiswa as ModelsMahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http;
use Illuminate\Support\Facades\Hash;

class Mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            ModelsMahasiswa::create([
                'nama'      => 'Nama Mahasiswa ' . $i,
                'nim'       => '23450700' . $i,
                'jurusan'   => 'Teknik',
                'prodi'     => 'Teknologi Rekayasa Otomotif',
            ]);
        }
    }
}
