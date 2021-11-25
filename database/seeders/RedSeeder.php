<?php

namespace Database\Seeders;

use App\Models\Red;
use Illuminate\Database\Seeder;

class RedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Red::factory(20)->create();
    }
}
