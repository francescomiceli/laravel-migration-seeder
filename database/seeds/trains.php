<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\train;
class trains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $newTrain = new train();
            $newTrain-> Azienda = $faker
        }
    }
}
