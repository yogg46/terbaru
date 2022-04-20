<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
            'NIK'=>'12345678901234567',
            'no_telepon'=>'123456789012',
            'role'=>'1',
        ]);
        User::create([
            'name' => 'Leader',
            'email'=>'leader@leader.com',
            'password'=>bcrypt('password'),
            'NIK'=>'32345678901234567',
            'no_telepon'=>'113456789012',
            'role'=>'4',
        ]);
        User::create([
            'name' => 'Jokoooo',
            'email'=>'joko1@leader.com',
            'password'=>bcrypt('password'),
            'NIK'=>'32345678901234567',
            'no_telepon'=>'113456789012',
            'role'=>'4',
        ]);
        User::create([
            'name' => 'Programmer',
            'email'=>'programmer@programmer.com',
            'password'=>bcrypt('password'),
            'NIK'=>'42335678901234567',
            'no_telepon'=>'423456789012',
            'role'=>'5',
        ]);
        User::create([
            'name' => 'Marketing',
            'email'=>'marketing@marketing.com',
            'password'=>bcrypt('password'),
            'NIK'=>'42345678901234567',
            'no_telepon'=>'523456789012',
            'role'=>'3',
        ]);
        User::create([
            'name' => 'joko subeno',
            'email'=>'joko@marketing.com',
            'password'=>bcrypt('password'),
            'NIK'=>'42345678901234567',
            'no_telepon'=>'523456789012',
            'role'=>'3',
        ]);
        User::create([
            'name' => 'Management',
            'email'=>'management@management.com',
            'password'=>bcrypt('password'),
            'NIK'=>'72345678901234567',
            'no_telepon'=>'723456789012',
            'role'=>'2',
        ]);


    }
}
