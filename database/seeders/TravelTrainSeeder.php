<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for ($i = 0; $i < 10; $i++){
        $newtrain = new Train();
        $newtrain -> azienda = $faker->name(); 
        $newtrain -> stazione_partenza = $faker->city(); 
        $newtrain -> stazione_arrivo = $faker->city(); 
        $newtrain -> orario_partenza = $faker->time(); 
        $newtrain -> orario_arrivo = $faker->time(); 
        $newtrain -> codice_treno = $faker->bothify(); 
        $newtrain -> numero_carrozze = $faker->randomDigit(); 
        $newtrain -> in_orario = $faker->boolean(); 
        $newtrain -> cancellato = $faker->boolean();
       
        if($i%2 == 0){
                $newtrain->data_partenza = $faker->date();
        }else{
                $newtrain->data_partenza = '2022-12-20';
        }

        $newtrain->save();
       }
    }
}
