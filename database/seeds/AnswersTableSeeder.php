<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;
use App\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Minimum random answers per question
     * @var integer
     */
    protected $minAnswers = 3;

    /**
     * Maximum random answers per question
     * @var integer
     */
    protected $maxAnswers = 3;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all user ids from DB
        $userIds = User::pluck('id');

        // Get all question ids from DB
        $questionIds = Question::pluck('id');

        foreach($questionIds as $questionId){
            $answersPerQuestion = rand($this->minAnswers,$this->maxAnswers);

            factory(App\Answer::class, $answersPerQuestion)->create([
                'question_id' => $questionId,
                'user_id' => $userIds[array_rand($userIds->all())]
            ]);
        }
    }
}
