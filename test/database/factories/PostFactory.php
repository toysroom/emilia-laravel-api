<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $category = Category::select('id')->inRandomOrder()->first();
        $category_id = $category->id;

        return [
            "title" => fake()->sentence(6, true),
            "content" => 'bla bla',
            "category_id" => $category_id
        ];
    }
}
