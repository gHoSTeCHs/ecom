<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use App\Models\ProductImage;
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
    public function definition(): array
    {
        return [
            //
            'title' => fake()->title,
            'product_category_id' => ProductCategory::factory(),
            'price' => fake()->randomElement(array: [50, 200, 235, 946, 90, 56]),
            'description' => fake()->paragraph(),

        ];
    }

    public function configure()
    {
        return $this->has(ProductImage::factory()->count(3), 'images');
    }
}
