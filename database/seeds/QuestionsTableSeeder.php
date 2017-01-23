<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all user ids from DB
        $userIds = User::pluck('id');

        // Generate 1 to 3 questions for user
        foreach($userIds as $userId){
            factory(App\Question::class, rand(1,3))->create([
                'user_id' => $userId
            ]);
        }
    }
}
