<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productcategory>
 */
class ProductcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Productcategory::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true) . '-' . $this->faker->uuid(),
            'description' => $this->faker->sentence(6, true),
            'author_id' => \App\Models\Author::factory(),
        ];
    }
}
