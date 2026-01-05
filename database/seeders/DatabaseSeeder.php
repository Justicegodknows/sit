<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Creating fake data...');

        // Create users one at a time to avoid memory issues
        for ($i = 0; $i < 50; $i++) {
            User::factory()->create();
        }
        $this->command->info('✓ Created 50 users.');

        // Create authors using existing user IDs (memory efficient)
        for ($i = 0; $i < 30; $i++) {
            $userId = User::inRandomOrder()->value('id');
            Author::factory()->create(['user_id' => $userId]);
        }
        $this->command->info('✓ Created 30 authors.');

        // Create products using existing author IDs
        // Factory already generates unique names with UUID
        for ($i = 0; $i < 100; $i++) {
            $authorId = Author::inRandomOrder()->value('id');
            Product::factory()->create(['author_id' => $authorId]);
        }
        $this->command->info('✓ Created 100 products.');

        $this->command->info('✓ Fake data generation completed successfully!');
    }
}

