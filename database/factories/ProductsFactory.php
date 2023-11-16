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
        $categories = ['vetements', 'robes', 'electronics', 'meubles', 'cuisiniers', 'chaussures', 'jeu_video'];
        $category = $this->faker->randomElement($categories);
        $images = glob(public_path('images/'.$category.'/*'));

        if (count($images) > 0) {
            $image = asset('images/'.$category.'/'.basename($this->faker->randomElement($images)));
        } else {
            $image = null;
        }
        return [
            'name' => $this->faker->word,
            'categories' => $category,
            'quantities' => $this->faker->biasedNumberBetween(0, 1000),
            'contents' => $this->faker->text,
            'prices' => $this->faker->randomFloat(2, 1, 100),
            'image' => $image,
        ];
    }
}
