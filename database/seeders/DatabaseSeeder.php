<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\ProductCategory;
use App\Models\Productsold;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    
        Author::factory()->count(10)->create();
        $this->command->info('Authors created successfully.');

    
        ProductCategory::factory()->count(10)->create();
        $this->command->info('Product Categories created successfully.');
    
        Productsold::factory()->count(10)->create();
        $this->command->info('Products Sold created successfully.');
    
        Comment::factory()->count(10)->create();
        $this->command->info('Comments created successfully.');
    }
}
