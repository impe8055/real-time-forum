<?php

namespace Database\Factories\Model;

use App\Models\Model\Like;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Model\Reply;
use App\Models\User;

class LikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Model\Like::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reply_id' =>Reply::all()->random()->id,
            'user_id' =>User::all()->random()->id,

        ];
    }
}
