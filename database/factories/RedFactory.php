<?php

namespace Database\Factories;

use App\Models\Red;
use Illuminate\Database\Eloquent\Factories\Factory;

class RedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Red::class;

    public function definition()
    {
        return [
            "SSID" => $this->faker->word(),
            "Contraseña" => $this->faker->password(),
            "Usuario_Creador" => $this->faker->userName(),
            "Email_Creador" => $this->faker->email()
        ];
    }
}
