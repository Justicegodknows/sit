<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\ProductCategory;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users first (no dependencies)
        $testUser = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);
        User::factory()->count(5)->create();
        $this->command->info('Users created successfully.');
    
        // Get only user IDs we need (memory efficient)
        $userIds = User::limit(6)->pluck('id')->toArray();
    
        // Create authors directly (no factory to avoid nested relationships)
        $testAuthor = Author::create([
            'user_id' => $testUser->id,
            'first_name' => 'Test',
            'last_name' => 'Author',
        ]);
        
        // Create additional authors using existing user IDs
        $firstNames = ['John', 'Jane', 'Bob', 'Alice', 'Charlie'];
        $lastNames = ['Smith', 'Doe', 'Johnson', 'Williams', 'Brown'];
        $remainingUserIds = array_slice($userIds, 1, 5);
        foreach ($remainingUserIds as $index => $userId) {
            Author::create([
                'user_id' => $userId,
                'first_name' => $firstNames[$index] ?? 'Author' . ($index + 1),
                'last_name' => $lastNames[$index] ?? 'Name' . ($index + 1),
            ]);
        }
        $this->command->info('Authors created successfully.');

        // Get only author IDs we need (memory efficient)
        $authorIds = Author::limit(6)->pluck('id')->toArray();

        // Create product categories directly (no factory to avoid nested relationships)
        ProductCategory::create([
            'author_id' => $testAuthor->id,
            'name' => 'Test Category',
            'description' => 'Test Description',
        ]);
        
        // Create additional product categories using existing author IDs
        $categoryNames = ['Electronics', 'Books', 'Clothing', 'Food', 'Sports'];
        $descriptions = [
            'Electronic devices and accessories',
            'Books and reading materials',
            'Clothing and fashion items',
            'Food and beverages',
            'Sports equipment and gear'
        ];
        $remainingAuthorIds = array_slice($authorIds, 0, 5);
        foreach ($remainingAuthorIds as $index => $authorId) {
            ProductCategory::create([
                'author_id' => $authorId,
                'name' => $categoryNames[$index] ?? 'Category ' . uniqid(),
                'description' => $descriptions[$index] ?? 'Category description ' . ($index + 1),
            ]);
        }
        $this->command->info('Product Categories created successfully.');
    }
}
/**
 * Explanation:
 * The error "SQLSTATE[23000]: Integrity constraint violation: 19 UNIQUE constraint failed: productcategories.name"
 * means that the 'name' column in the 'productcategories' table has a UNIQUE constraint,
 * and the seeder is trying to insert a duplicate name value.
 * 
 * By default, Laravel factories may generate duplicate names if not told otherwise.
 * 
 * Solution:
 * Update the ProductCategory factory to ensure unique names are generated.
 * 
 * If you want to fix it here in the seeder, you can use the 'unique()' modifier on the factory:
 */

 /**
  * Explanation:
  * The error "Call to undefined method Database\Factories\ProductcategoryFactory::unique()" occurs because
  * the `unique()` method is not available directly on the factory instance. Instead, `unique()` is a method
  * provided by Faker, which is used inside the factory definition for generating unique values.
  *
  * To fix this, update your ProductcategoryFactory to use `$this->faker->unique()->word()` for the 'name' attribute.
  * 
  * Example fix in `database/factories/ProductcategoryFactory.php`:
  * 
  *     public function definition(): array
  *     {
  *         return [
  *             'name' => $this->faker->unique()->word(),
  *             // other fields...
  *         ];
  *     }
  *
  * After making this change, you can simply use:
  *     ProductCategory::factory()->count(10)->create();
  * in your seeder, and it will generate unique names.
  *
  * Remove the incorrect usage of `->unique('name')` on the factory in your seeder.
  */

 // Remove this incorrect line from your seeder:
 // ProductCategory::factory()->count(10)->unique('name')->create();
 // $this->command->info('Product Categories created successfully (with unique names).');

