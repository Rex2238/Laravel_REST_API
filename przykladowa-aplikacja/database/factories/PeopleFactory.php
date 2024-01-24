<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

use App\Models\People;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone' => fake()->randomNumber(9, true),
            'street' => fake()->words(nb:1, asText:true),
            'name' => fake()->name(),
            'surname' => fake()->name(),
            'city' =>fake()->words(nb:1, asText:true),
        ];
    }
}