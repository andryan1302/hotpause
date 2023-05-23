<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('is_IS');

        for($i = 1;$i<=100;$i++){
            DB::table('details')->insert([
                'ticket_id' => $i,
                'start_date' => $faker->date($format='Y-m-d',$min='now'),
                'place' => $faker->address,
                'price' => rand(1,10) * 10000000,
            ]);
        }        
    }
}
