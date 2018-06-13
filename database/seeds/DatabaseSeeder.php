<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('questions')->insert([
             'subject'=>'P',
             'ques'=>'This is a question P4',
             'op1'=>'op1_txt',
             'op2'=>'op2_txt',
             'op3'=>'op3_txt',
             'op4'=>'op4_txt',
             'op5'=>'op5_txt',
             'op6'=>'op6_txt',
        ]);
    }
}
