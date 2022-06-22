<?php

namespace Database\Factories;

use App\Models\project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TrialFactory extends Factory
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
            'project_id' => $this->faker->randomElement($project),
            'status' => Arr::random(['1', '0']),
        ];
    }
}