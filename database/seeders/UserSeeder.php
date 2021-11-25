<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Marco",
            'email' => "dikon963@gmail.com",
            'password' => Hash::make("Contraseña"),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
