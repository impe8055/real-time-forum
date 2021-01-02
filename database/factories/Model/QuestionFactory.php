<?php

namespace Database\Factories\Model;

use App\Models\Model\Question;
use App\Models\Model\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = \App\Models\Model\Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $word = $this->faker->word();
        return [
            'title' =>$this->faker->sentence,
            'slug' =>Str::slug($word),
            'body' =>$this->faker->paragraph,
            'category_id' =>Category::all()->random()->id,
            'user_id' =>User::all()->random()->id,

        ];
    }
}




