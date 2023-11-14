<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            //
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'pretext' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(5),
            'tags' => 'media, tech, business',
            'location' => $this->faker->city()
        ];
    }
}
