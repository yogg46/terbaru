<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
            'NIK' => '3306124403910302',
            'role' => Arr::random(['1', '2', '3', '4', '5']),
            'status' => Arr::random(['1', '0']),
            'no_telepon' => $this->faker->e164PhoneNumber(),

        ];
    }

    // public function admin()
    // {
    //     return $this->state([
    //         'role'=>'1',
    //     ]);
    // }
    // public function manager()
    // {
    //     return $this->state([
    //         'role'=>'2',
    //     ]);
    // }
    // public function marketing()
    // {
    //     return $this->state([
    //         'role'=>'3',
    //     ]);
    // }
    // public function leader()
    // {
    //     return $this->state([
    //         'role'=>'4',
    //     ]);
    // }
    // public function programer()
    // {
    //     return $this->state([
    //         'role'=>'5',
    //     ]);
    // }
    // public function sus()
    // {
    //     return $this->state([
    //         'role'=>'5',
    //         'status'=>'0',
    //     ]);
    // }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}