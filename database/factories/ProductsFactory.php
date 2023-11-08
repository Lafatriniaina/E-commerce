<?php

namespace Database\Factories;

use App\Models\Products;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    protected $model = Products::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['vetements', 'robes', 'fournitures', 'cuisiniers', 'jeu video'];
        return [
            'categories' => $this->faker->randomElement($categories),
            'qualities' => $this->faker->word,
            'contents' => $this->faker->sentence,
            'prices' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
