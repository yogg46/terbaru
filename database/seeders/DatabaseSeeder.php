<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KK::class);
        // \App\Models\User::factory(10)->create();
        $this->call(Userseeder::class);
        $this->call(ProjectSeedeer::class);
        User::factory()->count(250)->create();
        client::factory()->count(80)->create();
        project::factory()->count(10)->create();
        // User::factory()->count(20)->manager()->create();
        // User::factory()->count(20)->marketing()->create();
        // User::factory()->count(20)->leader()->create();
        // User::factory()->count(20)->programer()->create();
        // User::factory()->count(50)->sus()->create();


    }
}
