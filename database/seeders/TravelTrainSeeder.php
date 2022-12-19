<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;
use Faker\Generator as Faker;
class TravelTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10;$i++){
        $newtrain = new Trains();
        $newtrain -> azienda = $faker->words(2); 
        $newtrain -> stazione_partenza = $faker->words(4); 
        $newtrain -> stazione_arrivo = $faker->words(4); 
        $newtrain -> orario_partenza = $faker->time(); 
        $newtrain -> orario_arrivo = $faker->time(); 
        $newtrain -> codice_treno = $faker->bothify(); 
        $newtrain -> numero_carrozze = $faker->randomDigit(); 
        $newtrain -> in_orario = $faker->boolean(); 
        $newtrain -> cancellato = $faker->boolean();
            dd($newtrain);
       }
    }
}
