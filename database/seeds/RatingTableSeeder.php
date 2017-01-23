<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Answer;

class RatingTableSeeder extends Seeder
{
    /**
     * Minimum number of ratings per answer
     * @var integer
     */
    protected $minRatings = 0;

    /**
     * Maximum number of ratings per answer
     * @var integer
     */
    protected $maxRatings = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all user ids from DB
        $users = User::all();

        // Get all question from DB
        $answers = Answer::all();

        foreach($answers as $answer){
            // Number of ratings the answer will have
            $ratingsPerAnswer = rand($this->minRatings, $this->maxRatings);

            if($ratingsPerAnswer == 0) continue;

            // Random user ids which will vote the answer
            $ratingUsersIds = array_rand($users->all(), $ratingsPerAnswer);

            $answer->ratedBy()->attach($ratingUsersIds);
        }
    }
}
