<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train= new Train;
        $train->azienda="Trenitalia";
        $train->stazione_di_partenza=$faker->company();
        $train->stazione_di_arrivo=$faker->city();
        $train->orario_di_partenza=$faker->city();
        while($train->stazione_di_partenza ==$train->stazione_di_arrivo){
            $train->orario_di_partenza=$faker->city();
        }
        $train->orario_di_arrivo=$faker->dateTimeBetween('-1 week', '+1 week');;
        $train->orario_di_arrivo=$faker->dateTimeBetween('+1 week', '+2 week');;
        $train->codice_treno=$faker->bothify('??##?#');
        $train->numero_carozze=$faker->numberBetween(2,15);
        $train->on_time=$faker->boolean();
        $train->cancellato=$faker->boolean();
        $train->save();
    }
}
