<?php

use Illuminate\Database\Seeder;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();	
        $players = App\Models\Player::all()->pluck('id')->toArray();

        for($i = 1; $i < count($players); $i++) {

         	$matches = $faker->numberBetween($min = 1, $max = 560);

         	$fifties = $faker->numberBetween($min = 1, $max = (($matches/50)+1));
         	$hundreds = $faker->numberBetween($min = 0, $max = (($matches/60)+1));
         	$runs = $faker->numberBetween($min = (($fifties + $hundreds) * 100), $max = ($matches*30));
         	if($hundreds > 0){
         		$highestScore = $faker->numberBetween($min = 100, $max = 264);
         	}else{
         		$highestScore = $faker->numberBetween($min = 50, $max = 99);
         	}
         	
         	App\Models\Stats::create([
                    'player_id' => $i,
                    'matches' => $matches,
                    'runs' => $runs,
                    'highestScore' => $highestScore,
                    'fifties' => $fifties,
                    'hundreds' => $hundreds
                ]);

         }
    }
}
