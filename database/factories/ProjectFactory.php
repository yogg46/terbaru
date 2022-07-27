<?php

namespace Database\Factories;

use App\Models\client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        $users = User::where('role', '3')->pluck('id');
        $client = client::all()->pluck('id');
        $leader = User::where('role', '4')->pluck('id');
        $unixTimestamp = '1658859015';
        return [

            'nama_project' => $this->faker->jobTitle(),
            'deskripsi_project' => $this->faker->text(),
            'no_client' => $this->faker->randomElement($client),
            'no_project' => $this->faker->unique()->numerify('NMN-##-#-###'),
            'level' => Arr::random(['1', '2', '3']),
            'kategori' => Arr::random(['1', '2', '3']),
            'tgl_buat' => $this->faker->dateTimeBetween('now', '+1 years')->format('d-m-Y'),
            'tgl_deadline' => $this->faker->dateTimeBetween('now', '+1 years')->format('d-m-Y'),
            'tgl_trial' => $this->faker->dateTimeBetween('now', '+1 years')->format('d-m-Y'),
            'tgl_release' => $this->faker->dateTimeBetween('now', '+1 years')->format('d-m-Y'),
            'marketing' => $this->faker->randomElement($users),
            // 'leader' => $this->faker->randomElement($leader),
            'leader' => 2,
            // 'total_progres' => $this->faker->numberBetween($min = 0, $max = 100),

            //
        ];
    }
}