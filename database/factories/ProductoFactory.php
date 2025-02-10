<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(10),
            'quantity' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement([0, 1]),
            'seller_id' => User::factory(),
        ];
    }
}
