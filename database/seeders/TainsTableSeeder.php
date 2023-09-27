<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $aziende = ["Trenitalia", "Italo treno", "SNCF", "OUIGO", "Deutsche Bahn", "FlixTrain"];
        $stazioni = ["Milano Centrale","Roma Termini", "Zurich HB", "Frankfurt Main Hbf", "Amsterdam central","Gare de Lyon", "Hannover Hbf"];
        $orario_di_partenza = [];
        for ($i=0; $i < 20 ; $i++) { 
           $treno = new Train();
           $treno->azienda = array_rand( $aziende) ;
           $treno->stazione_di_partenza = array_rand(  $stazioni) ;
           $treno->orario_di_partenza = $faker->time();
           $treno->orario_di_arrivo = $faker->time();
           $treno->codice_treno = $faker->randomNumber(5);
           $treno->numero_carrozze = $faker->numberBetween(1,20);
           $treno->in_arrivo = $faker->boolean;
           $treno->cancellato = $faker->boolean;

           $treno->save();
        }
      
    }
}
