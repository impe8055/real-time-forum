<?php

namespace Database\Factories\Model;

use App\Models\Model\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Model\Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
     $word = $this->faker->word();
        return [
            'name' => $this->faker->word,
            'slug' =>Str::slug($word)
        ];
    }
}






