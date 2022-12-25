<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MhsMtkl = [
            [
                'mahasiswa_id' => '2041720061',
                'matakuliah_id' => 1,
                'nilai' => 'A-'
            ],
            [
                'mahasiswa_id' => '2041720061',
                'matakuliah_id' => 2,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_id' => '2041720061',
                'matakuliah_id' => 3,
                'nilai' => 'A-'
            ],
            [
                'mahasiswa_id' => '2041720061',
                'matakuliah_id' => 4,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_id' => '2041720062',
                'matakuliah_id' => 1,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_id' => '2041720062',
                'matakuliah_id' => 2,
                'nilai' => 'A-'
            ],
            [
                'mahasiswa_id' => '2041720062',
                'matakuliah_id' => 3,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2041720062',
                'matakuliah_id' => 4,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_id' => '2041720100',
                'matakuliah_id' => 1,
                'nilai' => 'A-'
            ],
            [
                'mahasiswa_id' => '2041720100',
                'matakuliah_id' => 2,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_id' => '2041720100',
                'matakuliah_id' => 3,
                'nilai' => 'A+'
            ],
            [
                'mahasiswa_id' => '2041720100',
                'matakuliah_id' => 4,
                'nilai' => 'A-'
            ],
        ];
        DB::table('mahasiswa_matakuliah')->insert($MhsMtkl);
    }
}
