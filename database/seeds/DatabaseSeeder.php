<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Tables which will be truncated
     * @var array
     */
    protected $toTruncate = [
        'users',
        'questions',
        'answers',
        'ratings',
    ];

    /**
     * [$toSeed description]
     * @var array
     */
    protected $toSeed = [
        UsersTableSeeder::class,
        QuestionsTableSeeder::class
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

        $this->truncateTables();
        $this->seedTables();

        // Supposed to only apply to a single connection and reset itself
        // but explicitly for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Truncate specified tables
     */
    private function truncateTables(){
        // Truncate specified tables
        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
    }

    /**
     * Seed Tables
     */
    private function seedTables(){
        foreach ($this->toSeed as $seed) {
            $this->call($seed);
        }
    }
}
