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
        $leader = User::where('role', '2')->pluck('id');

        return [

            'nama_project' => $this->faker->jobTitle(),
            'deskripsi_project' => $this->faker->text(),
            'no_client' => $this->faker->randomElement($client),
            'no_project' => $this->faker->unique()->numerify('NMN-##-#-###'),
            'level' => Arr::random(['1', '2', '3']),
            'kategori' => Arr::random(['1', '2', '3']),
            'tgl_buat' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tgl_deadline' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tgl_trial' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tgl_release' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'marketing' => $this->faker->randomElement($users),
            'leader' => $this->faker->randomElement($leader),
            'total_progres' => $this->faker->numberBetween($min = 0, $max = 100),

            //
        ];
    }
}