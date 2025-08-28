<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ms_MY');
        return[

                'plat_no' => $faker->jpjNumberPlate, //ni panggil kelas yg dicustomize
                'jenis' => $this->faker->word(), //ni panggil class yg sudah build in
                'model' => $this->faker->word(),
                'color' => $this->faker->safeColorName(),
                 'user_id' => \App\Models\User::factory(),
               // 'user_id' => \App\Models\User::inRandomOrder()->first()->id() ?? \App\Models\User::factory(),

                
            ];
    }
}


