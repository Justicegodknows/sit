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
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'sold_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'customer_id' => \App\Models\User::factory(),
            'author_id' => \App\Models\Author::factory(),
            'productcategories_id' => \App\Models\Productcategory::factory(),
        ];
    }
}
