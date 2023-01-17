<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
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
    public function definition()
    {
        return [
            'head' => $this->faker->sentence(),
            'text' => $this->faker->text(300),
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'category_id' => $this->faker->numberBetween(1, Category::count())
        ];
    }
}
