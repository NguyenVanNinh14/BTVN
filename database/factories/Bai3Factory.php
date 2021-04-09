<?php

namespace Database\Factories;

use App\Models\Bai3;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Bai3Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bai3::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->title,
            'content' => $this->faker->content,
        ];
    }
}
