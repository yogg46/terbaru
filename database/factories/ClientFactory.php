<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'client_id' => $this->faker->unique()->numerify('NMN-###'),
            'nama' => $this->faker->company(),
            'alamat' => $this->faker->Address(),
            'cp' => $this->faker->tollFreePhoneNumber(),
            'no_kc' => Arr::random(['1', '2', '3']),
            'status' => Arr::random(['1', '2']),
        ];
    }
}