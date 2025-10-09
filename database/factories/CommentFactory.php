<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(12, true),
            'user_id' => \App\Models\User::factory(),
            'productsolds_id' => \App\Models\Productsold::factory(),
            'productcategories_id' => \App\Models\Productcategory::factory(),
        ];
    }
}
