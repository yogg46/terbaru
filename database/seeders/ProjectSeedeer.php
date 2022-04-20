<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Seeder;

class ProjectSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        project::create([
            'nama_project' => 'Web Rumah Sakit',
            'no_client' => '1',
            'no_project' => '1234',
            'status' => '1',
            'tgl_buat' => '2019-09-12',
            'tgl_deadline' => '2020-01-01',
            'tgl_trial' => '2020-02-01',
            'tgl_release' => '2020-03-01',
            'marketing' => '3',
            'leader' => '2',
            'total_progres' => '100',
        ]);
        project::create([
            'nama_project' => 'Web Rumah Sakit',
            'no_client' => '1',
            'no_project' => '1234',
            'status' => '3',
            'tgl_buat' => '2019-09-12',
            'tgl_deadline' => '2020-01-01',
            'tgl_trial' => '2020-02-01',
            'tgl_release' => '2020-03-01',
            'marketing' => '3',
            'leader' => '2',
            'total_progres' => '70',
        ]);
        project::create([
            'nama_project' => 'Web Rumah Sakit',
            'no_client' => '1',
            'no_project' => '1234',
            'status' => '1',
            'tgl_buat' => '2019-09-12',
            'tgl_deadline' => '2020-01-01',
            'tgl_trial' => '2020-02-01',
            'tgl_release' => '2020-03-01',
            'marketing' => '3',
            'leader' => '2',
            'total_progres' => '30',
        ]);
        project::create([
            'nama_project' => 'Web Rumah Sakit',
            'no_client' => '1',
            'no_project' => '1234',
            'status' => '2',
            'tgl_buat' => '2019-09-12',
            'tgl_deadline' => '2020-01-01',
            'tgl_trial' => '2020-02-01',
            'tgl_release' => '2020-03-01',
            'marketing' => '3',
            'leader' => '2',
            'total_progres' => '5',
        ]);
        // $faker = Faker::create();


        // foreach(range(1,50) as $index){
        //     $company = Company::create([
        //         'name' => $faker->company,
        //         'user_id' => $faker->randomElement($users),
        //     ]);
        // }
    }
}
