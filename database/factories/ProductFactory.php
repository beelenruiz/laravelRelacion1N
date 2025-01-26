<?php

namespace Database\Factories;

use App\Models\Category;
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
        fake()->addProvider(new \Mmo\Faker\PicsumProvider(fake()));

        return [
            'nombre' => fake() -> unique() -> sentence(2, true),
            'descripcion' => fake() -> text(),
            'imagen' => 'images/'. fake() -> picsum('public/storage/images/', 400, 400, false),
            'stock' => fake()->numberBetween(1, 1000),
            'category_id' => Category::all() -> random() -> id,
        ];
    }
}
