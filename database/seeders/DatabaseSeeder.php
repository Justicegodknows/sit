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

