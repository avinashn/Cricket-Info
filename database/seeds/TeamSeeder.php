<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        $filePath = storage_path('images');

        // Team Prefixes
        $team_prefixes=array("Super Kings","Stars","Lions","XI","Devils","Bulls", "Bears");
		
        for($i = 0; $i < 10; $i++) {

        	$random_prefix=array_rand($team_prefixes);

            App\Models\Team::create([
                'name' => $faker->lastname . " " .$faker->state. " ". $team_prefixes[$random_prefix],
                'logoUri' => $faker->imageUrl(400, 300, 'sports', true),
                'clubState' => $faker->state,
            ]);

        }
    }
}
