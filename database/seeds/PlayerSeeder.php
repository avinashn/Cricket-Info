<?php

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
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

        for($i = 0; $i < 250; $i++) {
        	
            App\Models\Player::create([
            	'team_id' => $faker->numberBetween($min = 1, $max = 10),
                'firstName' => $faker->firstname,
                'lastName' => $faker->lastname,
                'imageUri' => $faker->imageUrl(400, 300, 'people', true),
                'jersyNumber' => $faker->numberBetween($min = 0, $max = 999),
                'country' => $faker->country,
            ]);
        }
    }
}
