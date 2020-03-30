<?php

use Illuminate\Database\Seeder;
Use App\Models\Team;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();	

        $teams = Team::all()->pluck('name')->toArray();

        for($i = 0; $i < 100; $i++) {

            $random_number = rand(0,10);
        	$team1 = $faker->randomElement($teams);
            $team2 = $faker->randomElement($teams);
            
            if($team1 !== $team2){
                if($random_number >= 5){
                    $winner = $team1;
                }elseif($random_number < 5 &&  $random_number > 0){
                    $winner = $team2;
                }elseif($random_number == 0){
                    $winner = "No Result";
                }

                App\Models\Match::create([
                    'team1' => $team1,
                    'team2' => $team2,
                    'winner' => $winner,
                    'date' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
                ]);
            }

        }
    }
}
