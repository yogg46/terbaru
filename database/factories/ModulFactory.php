<?php

namespace Database\Factories;

use App\Models\project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;


class ModulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $project = project::all()->pluck('id');
        $programer = User::where('role', '5')->pluck('id');

        return [
            'nama' => $this->faker->jobTitle(), //
            'no_project' => $this->faker->randomElement($project),
            'programer' => $this->faker->randomElement($programer),
            // 'status' => Arr::random(['1', '0']),
            'progres' => $this->faker->numberBetween($min = 0, $max = 100),


        ];
    }
}
