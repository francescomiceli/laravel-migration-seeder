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
            $newTrain-> Azienda = $faker->words(1);
            $newTrain-> Stazione_di_partenza = $faker->country();
            $newTrain-> Stazione_di_arrivo = $faker->country();
            $newTrain-> Orario_di_partenza = $faker->time('H:i:s');
            $newTrain-> Orario_di_arrivo = $faker->time('H:i:s');
            $newTrain-> codice_treno = $faker->randomNumber(1, false);
            $newTrain-> numero_carrozze = $faker->randomNumber(1, false);
            $newTrain-> Data_partenza = $faker->date('Y_m_d');
            $newTrain-> In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->save();








        }
    }
}
