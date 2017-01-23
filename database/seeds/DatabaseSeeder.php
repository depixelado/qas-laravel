<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Tables which will be trucated
     * @var [type]
     */
    protected $toTruncate = [
        'users',
        'questions',
        'answers',
        'ratings',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // Disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate specified DBs
        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }

        $this->call(UsersTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);

        // Supposed to only apply to a single connection and reset itself
        // but explicitly for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
