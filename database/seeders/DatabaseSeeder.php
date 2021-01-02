<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
        \App\Models\User::factory()->count(1)->create();
        \App\Models\Model\Category::factory()->count(1)->create();
        \App\Models\Model\Question::factory()->count(50)->create();
        */

        \App\Models\Model\Reply::factory()->count(1)->create()->each(function($reply){
            $reply->likes()->save(factory(\App\Models\Model\Like::class)->make());
                //App\Models\Model\Like::factory()->make());
        });

        // \App\Models\User::factory(10)->create();
    }
}
