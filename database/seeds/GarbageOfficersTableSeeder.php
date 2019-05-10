<?php

use Illuminate\Database\Seeder;

class GarbageOfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < ; $i++) { 
            DB::table ('GarbageOfficersTableSeeder')->insert([
                'email'=>$faker->email,
                'name'=>$faker->name,
                'address'=>$faker->address,
                'phonenumber'=>$faker->phonenumber,
                'password'=>hash::make('password'),
                'savingId'=>1
            ];
        }
    }
}
