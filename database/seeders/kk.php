<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\Karyawans;
use App\Models\Kategori_karyawan;
use App\Models\kc;
use App\Models\User;
use Illuminate\Database\Seeder;

class KK extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kc::create([
            'kc_id'=>'1',
            'nama'=>'Instansi'
        ]);
        kc::create([
            'kc_id'=>'2',
            'nama'=>'Perusahaan'
        ]);
        kc::create([
            'kc_id'=>'3',
            'nama'=>'Kesehatan'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'1',
            'kategori'=>'Administator'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'2',
            'kategori'=>'Management'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'3',
            'kategori'=>'Marketing'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'4',
            'kategori'=>'Leader'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'5',
            'kategori'=>'Programer'
        ]);


    }
}
