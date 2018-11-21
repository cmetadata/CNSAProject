<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players') ->insert([
        	'firstName' 	=> str_random(35),
        	'lastName'		=> str_random(30),
        	'yearEntered' 	=> mt_rand(2000, 2018),
        	'position' 		=> str_random(25),
        	'redCards' 		=> mt_rand(0, 99),
        	'yellowCards' 	=> mt_rand(0, 99),
        	'goals' 		=> mt_rand(0, 99),
        	'playerRating' 	=> mt_rand(0, 999),
        	'assists' 		=> mt_rand(0, 99),
        	'saves' 		=> mt_rand(0, 99)
        ]);
    }
}
