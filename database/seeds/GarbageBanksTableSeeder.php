<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GarbageBanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5 ; $i++) {
            $faker = Faker::create('id_ID'); 
            DB::table ('garbage_banks')->insert([
                'name'=>$faker->name,
                'latitude'=>latitude($min = -90, $max = 90),
                'longitude'=>longitude($min = -180, $max = 180),
                'address'=>$faker->address,
                'contact'=>$faker->contact,
                'garbage_price'=>1,
                'garbage_officer_id'=>1
            ]);
        }
    }
} 