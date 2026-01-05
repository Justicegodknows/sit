<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true) . '-' . $this->faker->uuid(),
            'description' => $this->faker->sentence(6, true),
            'author_id' => \App\Models\Author::factory(),
        ];
    }
}
