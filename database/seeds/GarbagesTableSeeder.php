<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Garbage;

class GarbagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $garbage = new Garbage();
        for ($i=0; $i<5 ; $i++) {
            $garbage->setName($faker->name);
            $garbage->setType($faker->randomBetween(1,2));
            $garbage->setSum($faker->text);
            $garbage->setPrice($faker->randomNumber(10));
            $garbage->setAge($faker->numberBetween(25,40));
        }
    }
}