<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
	    $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
	    $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
	    $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
	    $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
	    $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
	    $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('students')->insert([ //,
                'country' => $faker->countryCode,
                'name' => $faker->name,
                'nickname' => $faker->firstName,
                'mini_contests' => $mc,
                'team_contests' => $tc,
		'speed' => $mc + $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac,
		'diligence' => $hw + $bs + $ks + $ac,
		'sum' => $mc + $tc + $hw + $bs + $ks + $ac
            ]);
        }
    }
}
