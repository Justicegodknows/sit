<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productsold>
 */
class ProductsoldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Productsold::factory(),
            'customer_id' => \App\Models\user::factory(),
            'author_id' => \App\Models\Author::factory(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
