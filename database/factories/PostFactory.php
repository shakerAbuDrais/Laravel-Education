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
    public function definition()
    {
        return [
            'title' => 'Model Factories',
            'excerpt' => 'Excerpt of our First Model Factory',
            'body' => 'Content of Body',
            'image_path' => 'Image Path',
            'is_published' => 1,
            'min_to_read' => 2,
        ];
    }
}
