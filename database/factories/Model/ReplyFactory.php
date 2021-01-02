<?php

namespace Database\Factories\Model;

use App\Models\Model\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Model\Category;
use App\Models\Model\Question;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Model\Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' =>$this->faker->paragraph,
            'question_id' =>Question::all()->random()->id,
            'user_id' =>User::all()->random()->id,

        ];
    }
}



