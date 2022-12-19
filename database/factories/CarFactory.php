<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'model' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'engine' => $this->faker->name(),
            'color' => $this->faker->name(),
            'registration' => $this->faker->name(),
            'doors' => $this->faker->randomElement([3, 4, 5])
        ];
    }
}
