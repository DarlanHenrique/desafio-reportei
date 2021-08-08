<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'resume' => $this->faker->sentence($nbWords = 3, $variableNbWords = false),
            'text' => $this->faker->realText($maxNbChars = 500, $indexSize = 3),
            'author' => $this->faker->name,
            'slug' => Str::slug('title', '-'),
            'imagelink' => "default.jpg",
            'category_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
