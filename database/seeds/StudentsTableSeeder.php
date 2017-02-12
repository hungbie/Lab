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

        for ($i = 1; $i <= $limit; $i++) {
	    $total_mc = 0;
	    $total_tc = 0;
	    $total_hw = 0;
	    $total_bs = 0;
	    $total_ks = 0;
	    $total_ac = 0;
            DB::table('students')->insert([
                'country' => $faker->countryCode,
                'name' => $faker->name,
                'nickname' => $faker->firstName,
                'mini_contests' => $total_mc,
                'team_contests' => $total_tc,
                'speed' => $total_mc + $total_tc,
                'homework' => $total_hw,
                'problem_bs' => $total_bs,
                'kattie_sets' => $total_ks,
                'achievements' => $total_ac,
                'diligence' => $total_hw + $total_bs + $total_ks + $total_ac,
                'sum' => $total_mc + $total_tc + $total_hw + $total_bs + $total_ks + $total_ac
            ]);

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
	    DB::table('week1s')->insert([
		'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
	    ]);
	    $total_mc = $total_mc + $mc;
	    $total_tc = $total_tc + $tc;
	    $total_hw = $total_hw + $hw;
	    $total_bs = $total_bs + $bs;
	    $total_ks = $total_ks + $ks;
	    $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week2s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]);
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;
 
            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week3s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]);
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;
 
            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week4s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]);
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week5s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]);
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;
 
            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week6s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]); 
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week7s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]); 
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week8s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]); 
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week9s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]);
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;
 
            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week10s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]); 
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week11s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]); 
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;

            $mc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $tc = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $hw = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $bs = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ks = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            $ac = floor($faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 4.5) * 2) / 2;
            DB::table('week12s')->insert([
                'student_id' => $i,
                'mini_contests' => $mc,
                'team_contests' => $tc,
                'homework' => $hw,
                'problem_bs' => $bs,
                'kattie_sets' => $ks,
                'achievements' => $ac
            ]); 
            $total_mc = $total_mc + $mc;
            $total_tc = $total_tc + $tc;
            $total_hw = $total_hw + $hw;
            $total_bs = $total_bs + $bs;
            $total_ks = $total_ks + $ks;
            $total_ac = $total_ac + $ac;
	    
            DB::table('students')->where('id', $i)->update([
                'mini_contests' => $total_mc,
                'team_contests' => $total_tc,
                'speed' => $total_mc + $total_tc,
                'homework' => $total_hw,
                'problem_bs' => $total_bs,
                'kattie_sets' => $total_ks,
                'achievements' => $total_ac,
                'diligence' => $total_hw + $total_bs + $total_ks + $total_ac,
                'sum' => $total_mc + $total_tc + $total_hw + $total_bs + $total_ks + $total_ac
            ]);
        }
    }
}
