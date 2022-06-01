<?php

namespace Database\Factories;

use App\Models\project;
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
        return [
            'nama' => $this->faker->jobTitle(), //
            // 'no_project' => $this->faker->randomElement($project),
            'no_project' => Arr::random(['1', '2', '3']),
            'progres' => $this->faker->numberBetween($min = 0, $max = 100),


        ];
    }
}